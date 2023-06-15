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
	$reg_para1 = 'The information below is required to understand various aspects of your way of life. It will help to generate a set of customized recommendations for you.';
	$reg_para2 = 'Your email ID is your identification in the system.  With email, you can re-log into the application and read the report of the assessment and recommendations once again. But rest assured, none of your personal data will be accessed by anyone else.';
	$reg_para3='Details of Emergency Contact is useful when you are alone and in distress situation and rescued by a stranger. Strangers need to inform your family members or responsible person who can come to take care of you and take decision for your treatment. You should re-print the card if emergency contact details are changed or card is damaged or lost';
	$reg_para4='Trustee of your pledge is the one, who helps to remind your family member about your wish during your final rites as most of the time family members may forget about your wish to donate organ due to the shock of losing you. Email or WhatsApp your pledge card to them to inform about your wish. You can enrol up to two trustees about your wish.';
	$reg_para5='Fill the below form for your Family Emergency Response Card';
	$reg_para6='You can Print the card once you submit the details.';
	$reg_title = 'Family Emergency Response Card';
	$fields_name = array('Prefix','Mr','Miss','Mrs','Dr','First Name','Middle Name','Last Name','Residential Address','Residence Contact No','Number of permanent people residing in the house','Name of person','Age','Gender','Male','Female','Trans Male','Trans Female','Relation with Head of Family','Mobile Number','Blood Group','Select Blood Group','A+','A-','B+','B-','AB+','AB-','O+','O-','Bombay Prototype Group','Not known','I want to donate following organs after my death','Eye','Skin','Heart Valves','Bone','Tendons and Ligaments','Heart','Lungs','Liver','Kidney','Bone marrow','Pancreas','Spleen','Intestine'
,'Full Address','Select State','Select District','Select Taluka','Select Pin code','Email address','WhatsApp or Telgram Number','Emergency Contact Details','Emergency Contact Name','Relation with Emergency Contact'
,'Emergency Contact Number','Trustee of your Pledge','1<sup>st</sup> Trustee','Name of Trustee','Relation with Trustee','Father','Mother','Brother','Sister',
'Wife','Son','Daughter','Daughter in law','Son in law','Father in law','Mother in law','Grand Son','Grand Daughter','Nephew','Niece','Neighbour','Friend',
'Employee','Office Colleague','Contact number of Trustee','2<sup>nd</sup> Trustee',
'Name of Trustee','Relation with Trustee',' Contact number of Trustee','My information may be shared with the National Organ and Tissue Transplant Organization (NOTTO) Registry*','Yes','No',
'I understand that this pledge is for donation of my organs after my death and has NO FINANCIAL REWARDS.',
'I understand that this is NOT LIVING DONOR CARD and there is no such thing as a living donor card.',
'Yes, I agree to RADHEE Disaster and Education Foundation', 'Privacy Policy and Terms of Use','Select Relation');
	$submit_btn = 'Submit';
	$register_msg ='Sucessfully Registered';/*refix-78*/
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

            <h4 class="text-justify text-center mt-1 mb-4">{{$reg_para5}}</h4>
            <p  class="text-justify text-center my-1">{{$reg_para6}}</p>
        </div>
    </div>
    <link rel = "stylesheet" href="frontend/css/plan.css">  
       <!-- <div class="split left"> -->
            <div class="centered ">
                <div class="formbg ">
                    <div class="formbg-inner padding-horizontal--48">
                        <form id="stripe-login">
                            <a class="ssolink" >Have a plan Already?</a><br/>
                                    <div class="field padding-bottom--24">
                                        <a class="btn btn-primary btn-block w-100"  href="{{route('alreadyplan')}}">Click to Download</a><br/>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        

                <div class="row123">

    <div class="row ">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <form id="registerForm" action=""  method="POST" >
            @csrf
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group">
                                      <label><b>{{ $fields_name[0]}}</b></label>
                                    <select name="headprefix" id="headprefix" class="form-control">
                                        <option value="Mr" {{ old('headprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                        <option value="Ms" {{ old('headprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                          <option value="Mrs" {{ old('headprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                        <option value="Dr" {{ old('headprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                    </select>
                              </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <div class="form-group">
                                <label><b>{{ $fields_name[5]}}</b></label>
                                <input name="headname" id="headname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}" required="" value="{{old('headname')}}">
                                <br/>
                                <label><b>{{ $fields_name[6]}}</b></label>
                                <input name="headmname" id="headmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}" required="" value="{{old('headmname')}}">
                                <br/>

                                <label><b>{{ $fields_name[7]}}</b></label>
                                <input name="headlname" id="headlname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}" required="" value="{{old('headlname')}}">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-grp3">
                                <label><b>{{ $fields_name[12]}}</b></label>
                                <input name="headage" id="headage" type="number" min="0" max="99" class="form-control" placeholder="{{ $fields_name[12]}}" required="" value="{{old('headage')}}">
                                <br/>
                            </div>
                            <div class="form-g">
                            @php
                                $ogender = old('headgender');
                            @endphp
                            <label><b>{{ $fields_name[13]}}</b></label>
                                <select id="headgender" name="headgender" required="" class="form-select">
                                    <option value="" selected="" disabled="">Select Gender</option>
                                    <option value="Male" @if($ogender == 'Male'){{ 'selected'}} @endif><b>{{ $fields_name[14]}}</b></option>
                                    <option value="Female" @if($ogender == 'Female'){{ 'selected'}} @endif><b>{{ $fields_name[15]}}</b></option>
                                    <option value="Transgender Male" @if($ogender == 'Transgender Male'){{'selected'}} @endif><b>{{ $fields_name[16]}}</b></option>
                                    <option value="Transgender Female" @if($ogender == 'Transgender Female'){{ 'selected'}} @endif><b>{{ $fields_name[17]}}</b></option>
                                    <option value="Others" @if($ogender == 'Others'){{ 'selected'}} @endif>Others</option>
                                </select><br>
                            </div>
                            <div class="form-grp1">
                                <label><b>{{ $fields_name[19]}}</b></label>
                                <input
                                name="headcontactno" id="headcontactno"
                                type="number"
                                maxlength="10"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                class="form-control" placeholder="{{ $fields_name[19]}}"  required="" value="{{old('headcontactno')}}">
                                <br/>
                            </div>
                        </div>
                        <div class="form-group">
                                <label><b>{{ $fields_name[8]}}</b></label>
                                <textarea  id="resaddress" name="resaddress" rows="4" cols="60">
                                </textarea><br/><br/>
                        </div>
                            <div class="form-grp">
                                <label><b>{{ $fields_name[9]}}</b></label>
                                 <input name="rescontno"
                                 id="rescontno" type="number"
                                 maxlength="10"
                                 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                 class="form-control" placeholder="{{ $fields_name[9]}}" required="" value="{{old('rescontno')}}">
                                 <br/>

                            </div>
                            <div class="form-grp1">
                                <label><b><?php echo "Email Id"; ?></b></label>
                                <input name="emailid" id="emailid"
                                type="text" class="form-control" placeholder="Email Id" required="" value="{{old('emailid')}}"> <br/>
                            </div>

                            <div class="form-grp1">
                                <label><b>{{ $fields_name[10]}}</b></label>
                                 <input name="member" id="member" type="number" class="form-control" placeholder="{{ $fields_name[10]}}" required="" value="{{old('member')}}">
                                
                                
                                 <br/>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a class="w-100 btn btn-primary btn-block enter-details" id="enter-details" href="#" onclick="permanentPeople(event)">ENTER</a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div id="permanentPeopleDetails">
                                <div class="form-grp2">
                                    <label><b>{{ $fields_name[11]}} - 1</b></label>
                                    <input name="membername1" id="membername1" type="text" class="form-control" placeholder="{{ $fields_name[11]}}" required="" value="{{old('membername1')}}">
                                    <br/>
                                </div>
                                <div class="form-grp3">
                                    <label><b>{{ $fields_name[12]}}</b></label>
                                    <input name="age1" id="age1" type="number" min="0" max="99" class="form-control" placeholder="{{ $fields_name[12]}}" required="" value="{{old('age1')}}">
                                    <br/>
                                </div>
                                <div class="form-g">
                                @php
                                    $ogender = old('gender1');
                                @endphp
                                <label><b>{{ $fields_name[13]}}</b></label>

                                <select id="gender1" name="gender1" required="" class="form-select">
                                <option value="" selected="" disabled="">Select Gender</option>
                                <option value="Male" @if($ogender == 'Male'){{ 'selected'}} @endif><b>{{ $fields_name[14]}}</b></option>
                                <option value="Female" @if($ogender == 'Female'){{ 'selected'}} @endif><b>{{ $fields_name[15]}}</b></option>
                                <option value="Transgender Male" @if($ogender == 'Transgender Male'){{'selected'}} @endif><b>{{ $fields_name[16]}}</b></option>
                                <option value="Transgender Female" @if($ogender == 'Transgender Female'){{ 'selected'}} @endif><b>{{ $fields_name[17]}}</b></option>
                                <option value="Others" @if($ogender == 'Others'){{ 'selected'}} @endif>Others</option>
                                </select><br>
                                </div>
                                <div class="form-grp3">
                                    <label><b>{{ $fields_name[18]}}</b></label>
                                    <input name="relation1" id="relation1" type="text" class="form-control" placeholder="{{ $fields_name[18]}}" required="" value="{{old('relation1')}}">
                                    <br/>
                                </div>
                                <div class="form-grp1">
                                    <label><b>{{ $fields_name[19]}}</b></label>
                                    <input
                                    name="contactno1" id="contactno1"
                                    type="number"
                                    maxlength="10"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    class="form-control" placeholder="{{ $fields_name[19]}}"  required="" value="{{old('contactno1')}}">
                                    <br/>
                                </div>
                            </div>
                    </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <br/><a class="w-100 btn btn-primary btn-block" onclick="saveData()" href="learnemp">SUBMIT</a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                </div>
                            </div>
                            <br/>
                            <br/>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('page-level-scripts')
<script>

    function permanentPeople(e) {
        e.preventDefault();
        let numberOfPeople = parseInt($('#member').val());
        $('#permanentPeopleDetails').empty();

        for(let i=0; i < numberOfPeople; i++) {
            let html = `
                                <div class="form-grp2">
                                    <label><b>{{ $fields_name[11]}} - ${i+1}</b></label>
                                    <input name="membername${i+1}" id="membername${i+1}" type="text" class="form-control" placeholder="{{ $fields_name[11]}}" required="" value="{{old('membername${i+1}')}}">
                                    <br/>
                                </div>
                                <div class="form-grp3">
                                    <label><b>{{ $fields_name[12]}}</b></label>
                                    <input name="age${i+1}" id="age${i+1}" type="number" min="0" max="99" class="form-control" placeholder="{{ $fields_name[12]}}" required="" value="{{old('age${i+1}')}}">
                                    <br/>
                                </div>
                                <div class="form-g">
                                @php
                                    $ogender = old('gender${i+1}');
                                @endphp
                                <label><b>{{ $fields_name[13]}}</b></label>

                                <select id="gender${i+1}" name="gender${i+1}" required="" class="form-select">
                                <option value="" selected="" disabled="">Select Gender</option>
                                <option value="Male" @if($ogender == 'Male'){{ 'selected'}} @endif><b>{{ $fields_name[14]}}</b></option>
                                <option value="Female" @if($ogender == 'Female'){{ 'selected'}} @endif><b>{{ $fields_name[15]}}</b></option>
                                <option value="Transgender Male" @if($ogender == 'Transgender Male'){{'selected'}} @endif><b>{{ $fields_name[16]}}</b></option>
                                <option value="Transgender Female" @if($ogender == 'Transgender Female'){{ 'selected'}} @endif><b>{{ $fields_name[17]}}</b></option>
                                <option value="Others" @if($ogender == 'Others'){{ 'selected'}} @endif>Others</option>
                                </select><br>
                                </div>
                                <div class="form-grp3">
                                    <label><b>{{ $fields_name[18]}}</b></label>
                                    <input name="relation${i+1}" id="relation${i+1}" type="text" class="form-control" placeholder="{{ $fields_name[18]}}" required="" value="{{old('relation')}}">
                                    <br/>
                                </div>
                                <div class="form-grp1">
                                    <label><b>{{ $fields_name[19]}}</b></label>
                                    <input
                                    name="contactno${i+1}" id="contactno${i+1}"
                                    type="number"
                                    maxlength="10"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    class="form-control" placeholder="{{ $fields_name[19]}}"  required="" value="{{old('contactno')}}">
                                    <br/>
                                </div>

            `;

            $('#permanentPeopleDetails').append(html);
        }


    }
    function saveData() {
            let headFullName = $('#headprefix').val() + " " + $('#headname').val() + " " + $('#headmname').val() + " " + $('#headlname').val();
            let headAge = $('#headage').val();
            let headGender = $('#headgender').val();
            let headContactNo = $('#headcontactno').val();
            let resAddress = $('#resaddress').val();
            let emailid = $('#emailid').val();
            let resNumber = $('#rescontno').val();
            let numOfPeople = $('#member').val();

            localStorage.setItem('headName', headFullName);
            localStorage.setItem('headAge', headAge);
            localStorage.setItem('headGender', headGender);
            localStorage.setItem('headContactNo', headContactNo);
            localStorage.setItem('resAddress', resAddress);
            localStorage.setItem('emailid', emailid);
            localStorage.setItem('resNumber', resNumber);
            localStorage.setItem('numOfPeople', numOfPeople);

            for(let i = 0; i < numOfPeople; i++) {
                let personName = $(`#membername${i+1}`).val();
                let personAge = $(`#age${i+1}`).val();
                let personGender = $(`#gender${i+1}`).val();
                let personContactNo = $(`#contactno${i+1}`).val();
                let personRelation = $(`#relation${i+1}`).val();

                localStorage.setItem(`personName${i+1}`, personName);
                localStorage.setItem(`personAge${i+1}`, personAge);
                localStorage.setItem(`personGender${i+1}`, personGender);
                localStorage.setItem(`personContactNo${i+1}`, personContactNo);
                localStorage.setItem(`personRelation${i+1}`, personRelation);
            }
        }
</script>
@endsection
