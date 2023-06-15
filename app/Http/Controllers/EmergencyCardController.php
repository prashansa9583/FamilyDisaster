<?php

namespace App\Http\Controllers;

use App\Mail\FERCMail;
use App\Models\Disaster;
use App\Models\DisasterUser;
use App\Models\EmergencyContact;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmergencyCardController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function learnemp()
    {
        $natural_disasters = Disaster::where('type', 'NATURAL')->get();
        $manmade_disasters = Disaster::where('type', 'MANMADE')->get();
        return view('learnemp', compact(['natural_disasters', 'manmade_disasters']));
    }

    public function emgmeeting()
    {
        return view('emgmeeting');
    }

    public function evacuation()
    {
        return view('evacuation');
    }

    public function famcard()
    {
        return view('famcard');
    }
    public function alreadyplan()
    {
        return view('alreadyplan');
    }
    
    public function alreadyplannum()
    {
        return view('alreadyplannum');
    }
    public function displaypdf()
    {
        return view('displaypdf');
    }
    public function existingplan(Request $request)
    {
        if($request->has('email')) {
            $user = DB::table('users')->where('emailid', $request->input('email'))->first();
        } else if ($request->has('phone')) {
            $user = DB::table('users')->where('number', $request->input('phone'))->first();
        } else {
            abort(404);
        }
        $ecs = DB::table('emergency_contacts')->where('user_id', $user->id)->get();
        $fms = DB::table('users')->where('user_id', $user->id)->get();
        $nd = DB::table('disasters')->where('id', function($query) use($user) {
            $query->select('disaster_id')->from('disaster_user')
                ->where('user_id', $user->id)
                ->where('disaster_type', 0)
                ->first();
        })->first();
        $md = DB::table('disasters')->where('id', function($query) use($user) {
            $query->select('disaster_id')->from('disaster_user')
                ->where('user_id', $user->id)
                ->where('disaster_type', 1)
                ->first();
        })->first();
        return view('existingplan', [
            'user' => $user,
            'ecs' => $ecs,
            'fms' => $fms,
            'nd' => $nd,
            'md' => $md,
        ]);
    }


    public function store(Request $request) {

        DB::transaction(function () use($request) {
            $request = $request['request'];
            // Head User
            $headUser = User::create([
                'name'=>$request['headName'],
                'age'=>$request['headAge'],
                'gender'=>$request['headGender'],
                'number'=>$request['headContactNo'],
                'address'=>$request['resAddress'],
                'emailid'=>$request['emailid'],
                'relation'=> 'HEAD',
                'school1' => $request['schoolNumber1'],
                'school2' => $request['schoolNumber2'],
                'college1' => $request['officeNumber1'],
                'college2' => $request['officeNumber2'],
            ]);

            // Family Details Users
            $users = collect();
            for ($i=1; $i<=$request['numOfPeople']; ++$i) {
                $users->push(User::create([
                    'name'=>$request["personName$i"],
                    'age'=>$request["personAge$i"],
                    'gender'=>$request["personGender$i"],
                    'number'=>$request["personContactNo$i"],
                    'address'=>$request["resAddress"],
                    'relation'=> $request["personRelation$i"],
                    'user_id' => $headUser->id,
                ]));
            }

            // Disaster User bound records
            for ($i=0; $i<=1; ++$i) {
                $disasterId = $i==0?$request['naturalDisaster']:$request['manmadeDisaster'];
                DisasterUser::create([
                    'user_id' => $headUser->id,
                    'disaster_id' => $disasterId,
                    'disaster_type' => $i,
                ]);
            }

            // Emergency Contacts
            for ($i=0; $i<=1; ++$i) {
                $emgName = $i==1?$request['emgInsideTownName']:$request['emgOutsideTownName'];
                $emgNumber = $i==1?$request['emgInsideNumber']:$request['emgOutsideNumber'];
                $emgAddress = $i==1?$request['emgInsideAddress']:$request['emgOutsideAddress'];
                EmergencyContact::create([
                    'user_id' => $headUser->id,
                    'name' => $emgName,
                    'number' => $emgNumber,
                    'address' => $emgAddress,
                    'in_town' => $i,
                ]);
            }

            // Neighbours
            for ($i=0; $i<=1; ++$i) {
                $negName = $i==0?$request['neg1Name']:$request['neg2Name'];
                $negNumber = $i==0?$request['neg1Number']:$request['neg2Number'];
                $users->push(User::create([
                    'name'=> $negName,
                    'number'=> $negNumber,
                    'relation'=> 'Neighbour',
                    'user_id' => $headUser->id,
                ]));
            }
            $dompdf = new Dompdf();
            $dompdf->loadHtml($request['html']);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $output = $dompdf->output();
            file_put_contents('FERC.pdf', $output);
        });
            $mailId = "skarfia03@gmail.com";
            Mail::to($mailId)->send(new FERCMail('FERC.pdf'));
            return new JsonResponse([
                'message' => 'Form Submitted Successfully'
            ], 200);
        }
    }

