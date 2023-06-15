@extends('layouts.app')

@section('php-code')
@php
session_start();
if(isset($_POST['language']))
{
    if(isset($_POST['language']))
    {
        $_SESSION['language'] = $_POST['language'];
    }
}
if(!function_exists('hash_equals')) {
    function hash_equals($str1, $str2) {
        if(strlen($str1) != strlen($str2)) {
        return false;
        } else {
        $res = $str1 ^ $str2;
        $ret = 0;
        for($i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
        return !$ret;
        }
    }
}
if(empty($_SESSION['language']))
{
$_SESSION['language'] = "English";
}
$selected_lang = $_SESSION['language'];
$sel_lang = $selected_lang;
if($selected_lang == "English")
{
    $reg_para = "Learn Emergency Management Planning";
    $reg_para1 = 'You can Print the card once you submit the details.';
    $fields_name = array('Do you have an Evacuation Plan?','Have you now sought the information on Evacuation Plan?');
}
else if($selected_lang == "Hindi"){

}
else if($selected_lang == "Marathi"){

}
@endphp
@endsection

@section('middle-content')
    <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

            <h4 class="text-justify text-center mt-1 mb-4">{{$reg_para}}</h4>
            <p  class="text-justify text-center my-1">{{$reg_para1}}</p>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="row">
                <form action="" id="registrationForm" method="POST">
                    @csrf
                    <label value="question"><b>{{$fields_name[0]}}</b></label>
                    <button type="button" name="yes"  class="btn btn-success mx-2">Yes</button>
					<button type="button" name="no" onclick="home()" class="btn btn-danger">No</button>
                    <div class="form-group mt-3">
                        <label><b>{{$fields_name[1]}}</b></label>
                        <input name="ques" id="ques" type="text" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <br/><a class="btn btn-primary btn-block w-100" href="{{route('emgmeeting')}}">SUBMIT</a><br/>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-level-scripts')
<script>
    function home(){
        Swal.fire({
            width: '450px',
            title: '<strong>Evacuation Plan</strong>',
        icon: 'question',
        html:
            'Knowing evacuation helps not only save lives but also reduce the impact of disaster on you and your family. It also helps your neighbour to take right steps Learn evacuation methods as per type of disaster.<br><br>'+
            '<table id="table" border=1><tbody><tr><td><strong>Disaster</strong> </td> <td><strong>Evacuation Policy</strong> </td><tr><td>Fire </td> <td>As early evacuate premises and go to nearby place safe from the fire heat/ gas </td> </tr><tr><td>Earthquake </td><td>Once the tremor stops evacuate the premises on go to safer place away from tall structure which can fall on you </td> </tr> <tr><td>Flood </td><td>Be insider the premises on higher floor </td></tr> <tr><td>Cyclone </td><td>Be inside the premises on area which is away from glass windows in the corner of home and also remember there can be possibility of flood once the wind is gone.  </td><tr><td>Bomb blast / terror attack </td><td>Do as per the need of the situation to be inside or outside the premises and take help of the local police or fire brigade to guide in that situation   </td></tbody> </table>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Okay!',
        })
    }


</script>
@endsection
