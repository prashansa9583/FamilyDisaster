@extends('layouts.app')

@section('php-code')
@php
//include 'database.php';
//$request->session()->forget('user_id');
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
	$reg_para = "Family Emergency Card";
	$reg_para1 = 'The information below is required to understand various aspects of your way of life. It will help to generate a set of customized recommendations for you.';
	$reg_para2 = 'Your email ID is your identification in the system.  With email, you can re-log into the application and read the report of the assessment and recommendations once again. But rest assured, none of your personal data will be accessed by anyone else.';
	$reg_para3='Details of Emergency Contact is useful when you are alone and in distress situation and rescued by a stranger. Strangers need to inform your family members or responsible person who can come to take care of you and take decision for your treatment. You should re-print the card if emergency contact details are changed or card is damaged or lost';
	$reg_para4='Trustee of your pledge is the one, who helps to remind your family member about your wish during your final rites as most of the time family members may forget about your wish to donate organ due to the shock of losing you. Email or WhatsApp your pledge card to them to inform about your wish. You can enrol up to two trustees about your wish.';
	$reg_para5='This emergency contact numbers are needed in day today life. This helps others helping you.';
	$reg_para6='You can Print the card once you submit the details.';
	$reg_title = 'Family Emergency Response Card';
	$fields_name = array('Prefix','Mr','Miss','Mrs','Dr','First Name','Middle Name','Last Name','Residential Address','Day and Night chemist number','Name of contact person in Day and Night Chemist','Hospital ICCU Name of Hospital','Hospital ICCU contact doctors name','Hospital ICCU Contact number','Orthopaedic Hospital Name','Multispecialty Hospital -Contact Doctors Name','Orthopaedic Hospital Name','Orthopaedic Hospital -Contact Doctors Name','Orthopaedic Hospital contact Number','Multispecialty Hospital Name','Multispecialty Hospital -Contact Doctors Name','Multispecialty Hospital contact number','General Nursing Home','General Nursing home- contact doctors name','General Nursing Contact number','Ambulance 1 ','Ambulance Number 1','Ambulance 2 ','Ambulance Number 2','Local Police Station Number','Local Fire Brigade','Gas / Pipe gas Customer Number', 'Gas agency / pipe gas agency local distributor company name','Gas agency/pipe gas agency of local distributor - contact number','Gas agency/pipe gas agency emergency helpline number','Electricity Service Number','Local Electric Station','Local Electric Station - Name','Local Electric Station - Contact No','Helpline Number of electric supplier provider','Local Electrician - Name','Local Electrician - Contact no','Plumber','Pumber - Name','Plumber - Contact No','Water Supply Department','Water Supply Helpline Number','Important Helpline Numbers','Family Doctors Name','Family Doctors phone number -Clinic','Family Doctors phone number - Home','Name of Chemist','Name of contact person in Chemist','Contact number of chemist number','Name of Day & Night Chemist No.','Day and Night chemist Name near your area','Name of contact person in Day and Night Chemist','Gas agency/pipe gas agency local distributor Contact Name'


,'Full Address','Select State','Select District','Select Taluka','Select Pin code','Email address','WhatsApp or Telgram Number','Emergency Contact Details','Emergency Contact Name','Relation with Emergency Contact'
,'Emergency Contact Number','Trustee of your Pledge','1<sup>st</sup> Trustee','Name of Trustee','Relation with Trustee','Father','Mother','Brother','Sister',
'Wife','Son','Daughter','Daughter in law','Son in law','Father in law','Mother in law','Grand Son','Grand Daughter','Nephew','Niece','Neighbour','Friend',
'Employee','Office Colleague','Contact number of Trustee','2<sup>nd</sup> Trustee',
'Name of Trustee','Relation with Trustee',' Contact number of Trustee','My information may be shared with the National Organ and Tissue Transplant Organization (NOTTO) Registry*','Yes','No',
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
                    <!--<center><p style="text-align: justify; margin:5px 0px;">{{ $reg_para1}}</p></center>
                    <br/>
                    <center><p style="text-align: justify; margin:5px 0px;">{{ $reg_para2}}</p></center>
                    <br/>-->
                    <h4 style="text-align: justify; margin:5px 0px;"><center>{{ $reg_para}}</center></h4><br/>
                    <p style="text-align: justify; margin:5px 0px;"><center>{{ $reg_para5}}</center></p>
                    <p style="text-align: justify; margin:5px 0px;"><center>{{ $reg_para6}}</center></p>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                </div>
            </div>
            <br/>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <form id="registerForm" action=""  method="POST" >
                    @csrf
                    <label value="question"><b>{{ $fields_name[48]}}</b></label>
                              <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label><b>{{ $fields_name[0]}}</b></label>
                                              <select name="famprefix" id="famprefix" class="form-control">
                                                <option value="Mr" {{ old('famprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('famprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('famprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('famprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                     </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="famdrname" id="famdrname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}"  required="" value="{{old('famdrname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="famdrmname" id="famdrmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}"  required="" value="{{old('famdrmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="famdrlname" id="famdrlname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}" required="" value="{{old('famdrlname')}}">
                                    </div>

                                    </div>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[49]}}</b></label>
                                         <input name="famdrno" id="famdrno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[49]}}"  required="" value="{{old('famdrno')}}">
                                        <br/>

                                    </div>

                                    <div class="form-grp1">
                                        <label><b>{{ $fields_name[50]}}</b></label>
                                         <input name="famdrno2" id="famdrno2" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[50]}}" required="" value="{{old('famdrno2')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[51]}}</b></label></br>
                                        <label><b>{{ $fields_name[52]}}</b></label></br>

                                </div>
                                </div>


                              <!-- <div class="row"> -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label><b>{{ $fields_name[0]}}</b></label>
                                            <select name="chemprefix" id="chemprefix" class="form-control">
                                                <option value="Mr" {{ old('chemprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('chemprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('chemprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('chemprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="chemname" id="chemname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}" required="" value="{{old('chemname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="chemmname" id="chemmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}" required="" value="{{old('chemmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="chemlname" id="chemlname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}" required="" value="{{old('chemlname')}}">

                                    </div>
                                </div>
                                    <div class="form-grp3">
                                        <label><b>{{ $fields_name[53]}}</b></label>
                                         <input name="phno" id="phno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[53]}}" required="" value="{{old('phno')}}">
                                        <br/>
                                    </div>

                                    <label><b>{{ $fields_name[54]}}</b></label>

                                    <div class="form-grp1">
                                        <label><b>{{ $fields_name[55]}}</b></label>
                                         <input name="contactno" id="contactno" type="text" class="form-control" placeholder="{{ $fields_name[55]}}" required="" value="{{old('contactno')}}">
                                        <br/>
                                    </div>

                            <label><b>{{ $fields_name[56]}}</b></label>
                              <!-- <div class="row"> -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label ><b>{{ $fields_name[0]}}</b></label>
                                            <select name="dnchemprefix" id="dnchemprefix" class="form-control">
                                                <option value="Mr" {{ old('dnchemprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('dnchemprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('dnchemprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('dnchemprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="dnchemname" id="dnchemname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}" required="" value="{{old('dnchemname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="dnchemmname" id="dnchemmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}"  required="" value="{{old('dnchemmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="dnchemlname" id="dnchemlname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}"  required="" value="{{old('dnchemlname')}}">

                                    </div>
                                </div>

                                    <div class="form-grp1">
                                        <label><b>{{ $fields_name[9]}}</b></label>
                                         <input name="chemno" id="" type="chemno"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[9]}}"  required="" value="{{old('chemno')}}">
                                        <br/>
                                            <label><b>{{ $fields_name[11]}}</b></label><BR>
                                            <label><b>{{ $fields_name[12]}}</b></label>

                                    </div>

                              <!-- <div class="row"> -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label><b>{{ $fields_name[0]}}</b></label>
                                            <select name="icuprefix" id="icuprefix" class="form-control">
                                                <option value="Mr" {{ old('icuprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('icuprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('icuprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('icuprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="icuname" id="icuname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}" required="" value="{{old('icuname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="icumname" id="icumname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}" required="" value="{{old('icumname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="iculname" id="iculname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}"  required="" value="{{old('iculname')}}">

                                    </div>
                                </div>
                                <div class="form-grp1">
                                        <label><b>{{ $fields_name[13]}}</b></label>
                                         <input name="icuno" id="icuno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[13]}}" title="<b>{{ $fields_name[1]}}" required="" value="{{old('icuno')}}">
                                        <br/>
                                        <label value="question"><b>{{ $fields_name[14]}}</b></label><BR>
                                        <label value="question"><b>{{ $fields_name[17]}}</b></label>

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label><b>{{ $fields_name[0]}}</b></label>
                                            <select name="orthprefix" id="orthprefix" class="form-control">
                                                <option value="Mr" {{ old('orthprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('orthprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('orthprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('orthprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="orthname" id="orthname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}" required="" value="{{old('orthname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="orthmname" id="orthmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}" required="" value="{{old('orthmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="orthlname" id="orthlname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}" required="" value="{{old('orthlname')}}">

                                    </div>
                                </div>
                                <div class="form-grp1">
                                        <label><b>{{ $fields_name[18]}}</b></label>
                                         <input name="orthono" id="orthono" type="number" class="form-control"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"placeholder="{{ $fields_name[18]}}" required="" value="{{old('orthono')}}">
                                        <br/>
                                        <label ><b>{{ $fields_name[19]}}</b></label><BR>
                                        <label ><b>{{ $fields_name[20]}}</b></label>

                                    </div>

                              <!-- <div class="row"> -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label ><b>{{ $fields_name[0]}}</b></label>
                                            <select name="msprefix" id="msprefix" class="form-control">
                                                <option value="Mr" {{ old('msprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('msprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('msprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('msprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>

                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="msname" id="msname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}"  required="" value="{{old('msname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="msmname" id="msmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}"  required="" value="{{old('msmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="mslname" id="mslname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}"required="" value="{{old('mslname')}}">
                                    </div>
                                </div>
                                <div class="form-grp1">
                                        <label><b>{{ $fields_name[21]}}</b></label>
                                         <input name="msno" id="msno" type="number" class="form-control"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"placeholder="{{ $fields_name[21]}}" required="" value="{{old('msno')}}">
                                        <br/>
                                        <label ><b>{{ $fields_name[22]}}</b><BR></label>
                                        <label value="question"><b>{{ $fields_name[23]}}</b></label>

                                    </div>

                              <!-- <div class="row"> -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label><b>{{ $fields_name[0]}}</b></label>
                                              <select name="gennursprefix" id="gennursprefix" class="form-control">
                                                <option value="Mr" {{ old('gennursprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('gennursprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('gennursprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('gennursprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="gennursname" id="gennursname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}"  required="" value="{{old('gennursname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="gennursmname" id="gennursmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}" required="" value="{{old('gennursmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="gennurslname" id="gennurslname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}"  required="" value="{{old('gennurslname')}}">

                                    </div>
                                </div>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[24]}}</b></label>
                                         <input name="generalno" id="generalno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[24]}}"  required="" value="{{old('generalno')}}">
                                        <br/>

                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[25]}}</b></label>
                                         <input name="amb1" id="amb1" type="text"
                                         class="form-control" placeholder="{{ $fields_name[25]}}" required="" value="{{old('amb1')}}">
                                        <br/>


                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[26]}}</b></label>
                                         <input name="ambno1" id="ambno1" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[26]}}"  required="" value="{{old('ambno1')}}">
                                        <br/>

                                    </div>

                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[27]}}</b></label>
                                         <input name="amb2" id="amb2" type="text"
                                         class="form-control" placeholder="{{ $fields_name[27]}}" required="" value="{{old('amb2')}}">
                                        <br/>

                                    </div>

                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[28]}}</b></label>
                                         <input name="ambno2" id="ambno2" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[28]}}"  required="" value="{{old('ambno2')}}">
                                        <br/>

                                    </div>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[29]}}</b></label>
                                         <input name="policeno" id="policeno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[29]}}"  required="" value="{{old('policeno')}}">
                                        <br/>

                                    </div>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[30]}}</b></label>
                                         <input name="firebrigade" id="firebrigade" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[30]}}"  required="" value="{{old('firebrigade')}}">
                                        <br/>

                                    </div>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[31]}}</b></label>
                                         <input name="gascusno" id="gascusno" type="number"maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"

                                         class="form-control" placeholder="{{ $fields_name[31]}}" required="" value="{{old('gascusno')}}">
                                        <br/>
                                        <label ><b>{{ $fields_name[32]}}</b></label>
                                    <label ><BR><b>{{ $fields_name[57]}}</b></label>
                                    </div>


                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group">
                                              <label><b>{{ $fields_name[0]}}</b></label>
                                              <select name="gasagprefix" id="gasagprefix" class="form-control">
                                                <option value="Mr" {{ old('gasagprefix') == "Mr" ? 'selected' : '' }}><b>{{ $fields_name[1]}}</b></option>
                                                <option value="Ms" {{ old('gasagprefix') == "Ms" ? 'selected' : '' }}><b>{{ $fields_name[2]}}</b></option>
                                                  <option value="Mrs" {{ old('gasagprefix') == "Mrs" ? 'selected' : '' }}><b>{{ $fields_name[3]}}</b></option>
                                                <option value="Dr" {{ old('gasagprefix') == "Dr" ? 'selected' : '' }}><b>{{ $fields_name[4]}}</b></option>
                                            </select>
                                      </div>
                                </div>

                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                    <div class="form-group">
                                        <label><b>{{ $fields_name[5]}}</b></label>
                                        <input name="gasagname" id="gasagname" type="text" class="form-control" placeholder="{{ $fields_name[5]}}"  required="" value="{{old('gasagname')}}">
                                        <br/>
                                        <label><b>{{ $fields_name[6]}}</b></label>
                                        <input name="gasagmname" id="gasagmname" type="text" class="form-control" placeholder="{{ $fields_name[6]}}"  required="" value="{{old('gasagmname')}}">
                                        <br/>

                                        <label><b>{{ $fields_name[7]}}</b></label>
                                        <input name="gasaglname" id="gasaglname" type="text" class="form-control" placeholder="{{ $fields_name[7]}}" required="" value="{{old('gasaglname')}}">

                                    </div>
                                </div>

                            <div class="form-grp">
                                        <label><b>{{ $fields_name[33]}}</b></label>
                                         <input name="gasdisno" id="gasdisno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[33]}}"  required="" value="{{old('gasdisno')}}">
                                        <br/>
                            </div>
                            <div class="form-grp">
                                        <label><b>{{ $fields_name[34]}}</b></label>
                                         <input name="gashelpno" id="gashelpno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[34]}}"  required="" value="{{old('gashelpno')}}">
                                        <br/>
                            </div>


                            <label><b>{{ $fields_name[35]}}</b></label><br/>
                            <label><b>{{ $fields_name[36]}}</b></label>
                            <div class="form-grp">
                                        <label><b>{{ $fields_name[37]}}</b></label>
                                         <input name="electric" id="electric" type="text"

                                         class="form-control" placeholder="{{ $fields_name[37]}}" required="" value="{{old('electric')}}">
                                        <br/>

                                    </div>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[38]}}</b></label>
                                         <input name="electricno" id="electricno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[38]}}"  required="" value="{{old('electricno')}}">
                                        <br/>
                                    </div>
                                    <label><b>{{ $fields_name[39]}}</b></label>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[40]}}</b></label>
                                         <input name="electrichelp" id="electrichelp" type="text"

                                         class="form-control" placeholder="{{ $fields_name[40]}}"  required="" value="{{old('electrichelp')}}">
                                        <br/>
                                        <div class="form-grp">
                                        <label><b>{{ $fields_name[41]}}</b></label>
                                         <input name="locelecno" id="locelecno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[41]}}" required="" value="{{old('locelecno')}}">
                                        <br/>
                                    </div>
                                    </div>
                                    <label><b>{{ $fields_name[42]}}</b></label>
                                    <div class="form-grp">
                                        <label><b>{{ $fields_name[43]}}</b></label>
                                         <input name="plumber" id="plumber" type="text"
                                         class="form-control" placeholder="{{ $fields_name[43]}}"  required="" value="{{old('plumber')}}">
                                        <br/>
                                        <div class="form-grp">
                                        <label><b>{{ $fields_name[44]}}</b></label>
                                         <input name="plumberno" id="plumberno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[44]}}" required="" value="{{old('locelecno')}}">
                                        <br/>
                                    </div>
                                    </div>
                                    <label><b>{{ $fields_name[45]}}</b></label>

                                        <div class="form-grp">
                                        <label><b>{{ $fields_name[46]}}</b></label>
                                         <input name="watersupplyno" id="watersupplyno" type="number"
                                         maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                         class="form-control" placeholder="{{ $fields_name[46]}}" required="" value="{{old('watersupplyno')}}">
                                </div>
</div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <br/><a class="w-100 btn btn-primary btn-block" onclick="saveData()" href="javascript:void(0)">SUBMIT</a><br/>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                </div>
                            </div>

                        </div>
                </form>

                    <style>
                        table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        }

                        td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                        }

                        tr:nth-child(even) {
                        background-color: #dddddd;
                        }
                    </style>
                        <table>
                        <th colspan="2">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Important Helpline Numbers</th>
                        <tr>
                            <td>Police </td>
                            <td>100</td>
                        </tr>
                            <tr>
                            <td>Fire Brigade</td>
                            <td>101</td>
                        </tr>  <tr>
                            <td>Medical Helpline</td>
                            <td>102</td>
                        </tr>  <tr>
                            <td>Senior Citizens</td>
                            <td>103</td>
                        </tr>  <tr>
                            <td>Blood Bottle Helpline </td>
                            <td>104</td>
                        </tr><tr>
                            <td>Ambulance Number  </td>
                            <td>108</td>
                        </tr>
                        <tr>
                            <td>Disaster Control Number of local Municipal / Collector Number </td>
                            <td>1070</td>
                        </tr><tr>
                            <td>Mantralaya Disaster Control Room </td>
                            <td>1077</td>
                        </tr><tr>
                            <td>Railway Police Fore </td>
                            <td>1275</td>
                        </tr>
                        </table><br/><br/>
                    </div>
                </div>

                </div>
            </div>
@endsection

@section('page-level-scripts')
<script>
    function saveData() {
        // AJAX Call to save data in DB
        request = {};
        request['headName'] = localStorage.getItem('headName');
        request['headAge'] = localStorage.getItem('headAge');
        request['headGender'] = localStorage.getItem('headGender');
        request['headContactNo'] = localStorage.getItem('headContactNo');
        request['resAddress'] = localStorage.getItem('resAddress');
        request['resNumber'] = localStorage.getItem('resNumber');
        request['numOfPeople'] = localStorage.getItem('numOfPeople');
        for(let i = 0; i < request['numOfPeople']; i++) {
            request[`personName${i+1}`] = localStorage.getItem(`personName${i+1}`);
            request[`personAge${i+1}`] = localStorage.getItem(`personAge${i+1}`);
            request[`personGender${i+1}`] = localStorage.getItem(`personGender${i+1}`);
            request[`personContactNo${i+1}`] = localStorage.getItem(`personContactNo${i+1}`);
            request[`personRelation${i+1}`] = localStorage.getItem(`personRelation${i+1}`);
        }
        request['naturalDisaster'] = localStorage.getItem('naturalDisaster');
        request['manmadeDisaster'] = localStorage.getItem('manmadeDisaster');
        request['naturalDisasterName'] = localStorage.getItem('naturalDisasterName');
        request['manmadeDisasterName'] = localStorage.getItem('manmadeDisasterName');
        request['emgInsideTownName'] = localStorage.getItem('emgInsideTownName');
        request['emgInsideNumber'] = localStorage.getItem('emgInsideNumber');
        request['emgInsideAddress'] = localStorage.getItem('emgInsideAddress');
        request['emgOutsideTownName'] = localStorage.getItem('emgOutsideTownName');
        request['emgOutsideNumber'] = localStorage.getItem('emgOutsideNumber');
        request['emgOutsideAddress'] = localStorage.getItem('emgOutsideAddress');
        request['neg1Name'] = localStorage.getItem('neg1Name');
        request['neg1Number'] = localStorage.getItem('neg1Number');
        request['neg2Name'] = localStorage.getItem('neg2Name');
        request['neg2Number'] = localStorage.getItem('neg2Number');
        request['schoolNumber1'] = localStorage.getItem('schoolNumber1');
        request['schoolNumber2'] = localStorage.getItem('schoolNumber2');
        request['officeNumber1'] = localStorage.getItem('officeNumber1');
        request['officeNumber2'] = localStorage.getItem('officeNumber2');
        request['emailid'] = localStorage.getItem('emailid');

        let html = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FERC</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Calibri', sans-serif;
            font-size: 12px;
        }
        .d-flex {
            dispaly: flex !important;
        }
        .justify-content-center {justify-content: center !important;}
        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }
        .container {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }
        .table-green {background: #4ead5b!important;}
        table {
            border-left: 0.01em solid #333;
            border-right: 0;
            border-top: 0.01em solid #333;
            border-bottom: 0;
            border-collapse: collapse;
        }
        table td,
        table th {
            text-align: left;
            border-left: 0;
            border-right: 0.01em solid #333;
            border-top: 0;
            border-bottom: 0.01em solid #333;
        }
        .border {border: 1px solid #dee2e6 !important;}
        .border-dark {border-color: #212529 !important;}
        .text-white {color: rgba(255, 255, 255, 1) !important;}
        .table-bordered > :not(caption) > * {border-width: 1px 0;}
        .table-bordered > :not(caption) > * > * {border-width: 0 1px;}
        .w-100 {width:100% !important;}
        .w-25 { width: 25% !important;}
        .w-90 {width: 90% !important;}
        .p-1 {
            padding: 0.25rem !important;
        }
        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }
        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }
        .mt-4 { margin-top: 1.5rem !important;}
        .fw-bold {font-weight: 700 !important;}
        .text-center {text-align: center !important; }
        .fs-4 {font-size: 1.2rem !important;}
    </style>
</head>
<body>
    <div style="width: 768px;" class="m-5 mx-auto container">

        <!-- Begin: Title -->
        <table class="w-90 d-flex justify-content-center">
            <thead>
                <tr>
                    <th class="table-green border border-dark text-white text-center p-1 px-3 fs-4" >Family Emergency Response Card</th>
                </tr>
            </thead>
        </table>
        <!-- End: Title -->

        <!-- Begin: FamilyTable -->
        <div class="mt-4">
            <div class="fw-bold">Family Details: -</div>
            <table class="table-bordered w-90">
                <thead>
                    <tr>
                        <th class="p-1 px-2">Name</th>
                        <th class="p-1 px-2">Relation with head of the family</th>
                        <th class="p-1 px-2">Age</th>
                        <th class="p-1 px-2">Gender</th>
                        <th class="p-1 px-2">Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-1 px-2">${request[`headName`]}</td>
                        <td class="p-1 px-2">HEAD</td>
                        <td class="p-1 px-2">${request[`headAge`]}</td>
                        <td class="p-1 px-2">${request[`headGender`]}</td>
                        <td class="p-1 px-2">${request[`headContactNo`]}</td>
                    </tr>
                    `;

        for(let i = 0; i < request['numOfPeople']; i++) {
            html+=`<tr>
                <td class="p-1 px-2">${request[`personName${i+1}`]}</td>
                <td class="p-1 px-2">${request[`personRelation${i+1}`]}</td>
                <td class="p-1 px-2">${request[`personAge${i+1}`]}</td>
                <td class="p-1 px-2">${request[`personGender${i+1}`]}</td>
                <td class="p-1 px-2">${request[`personContactNo${i+1}`]}</td>
            </tr>`
        }
                html+=`</tbody>
            </table>
        </div>
        <!-- End: FamilyTable -->

        <!-- Begin: School/College Contact Table -->
        <div class="mt-4">
            <div class="fw-bold">School/College Contact Details: -</div>
            <table class="table-bordered  w-90">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Contact no. </b></td>
                        <td class="p-1 px-2">${request['schoolNumber1']+', '+request['schoolNumber2']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: School/College Contact Table -->

        <!-- Begin: Office Contact Table -->
        <div class="mt-4">
            <div class="fw-bold">Office Contact Details: -</div>
            <table class="table-bordered  w-90">
                <tbody>
                <tr>
                    <td class="p-1 px-2 w-25"><b>Contact no.</b> </td>
                    <td class="p-1 px-2">${request['officeNumber1']+', '+request['officeNumber2']}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Office Contact Table -->

        <!-- Begin: Residence Table -->
        <div class="mt-4">
            <table class="table-bordered  w-90">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Residence Address</b></td>
                        <td class="p-1 px-2">${request['resAddress']}</td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Residence Landline no.</b></td>
                        <td class="p-1 px-2">${request['resNumber']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Residence Table -->

        <!-- Begin: Emergency Personal Contact inside hometown-->
        <div class="mt-4">
            <div class="fw-bold">Emergency Personal Contact inside hometown: -</div>
            <table class="table-bordered  w-90">
                <thead>
                    <tr>
                        <th class="p-1 px-2">Name</th>
                        <th class="p-1 px-2">Address</th>
                        <th class="p-1 px-2">Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-1 px-2">${request['emgInsideTownName']}</td>
                        <td class="p-1 px-2">${request['emgInsideAddress']}</td>
                        <td class="p-1 px-2">${request['emgInsideNumber']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Emergency Personal Contact inside hometown -->

        <!-- Begin: Emergency Personal Contact outside hometown -->
        <div class="mt-4">
            <div class="fw-bold">Emergency Personal Contact outside hometown: -</div>
            <table class="table-bordered  w-90">
                <thead>
                <tr>
                    <th class="p-1 px-2">Name</th>
                    <th class="p-1 px-2">Address</th>
                    <th class="p-1 px-2">Mobile No.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="p-1 px-2">${request['emgOutsideTownName']}</td>
                    <td class="p-1 px-2">${request['emgOutsideAddress']}</td>
                    <td class="p-1 px-2">${request['emgOutsideNumber']}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Emergency Personal Contact outside hometown -->

        <!-- Begin: Neighbour Table -->
        <div class="mt-4">
            <div class="fw-bold">Neighbour: -</div>
            <table class="table-bordered  w-90">
                <thead>
                <tr>
                    <th class="p-1 px-2">Sr. No.</th>
                    <th class="p-1 px-2">Name</th>
                    <th class="p-1 px-2">Mobile No.</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-1 px-2">1</td>
                        <td class="p-1 px-2">${request['neg1Name']}</td>
                        <td class="p-1 px-2">${request['neg1Number']}</td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2">2</td>
                        <td class="p-1 px-2">${request['neg2Name']}</td>
                        <td class="p-1 px-2">${request['neg2Number']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Neighbour Table -->

        <!-- Begin: Disaster Table -->
        <div class="mt-4">
            <div class="fw-bold">Name of Disaster that can impact you and your family: -</div>
            <table class="table-bordered w-90">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Natural</b></td>
                        <td class="p-1 px-2">${request['naturalDisasterName']}</td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Man-made</b></td>
                        <td class="p-1 px-2">${request['manmadeDisasterName']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Disaster Table -->

    </div>
</body>
</html>
`;
   

        

      request['html'] = html;



        $.ajax({
            url: '{{ route('store') }}',
            method: 'POST',
            data: {
                'request': request,
                '_token': '{{ csrf_token() }}',
            },
            success: function(data) {
                Swal.fire({
                    title: "Success",
                    text: data.message,
                    icon: "success",
                    confirmButtonText: "Okay",
                    reverseButtons: true,
                    
                }).then((res) => {
                    window.location = "displaypdf";
                });
            },
            error: function(data) {
                Swal.fire({
                    title: "Error",
                    text: "Please Fill the Complete Form",
                    icon: "error",
                    confirmButtonText: "Okay",
                    reverseButtons: true
                });
            }
        });
    }

</script>
@endsection
