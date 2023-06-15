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
    $reg_para = "Prepare “Emergency Meeting Place and their contact details” list";
	$reg_para1 ='Since you know what types of disaster you and your family are vulnerable for. Disaster can strike any hours of the day, during each of family members may be at different places. Discussion about the meeting place in different natural or manmade disasters will help you to reduce the hassle of searching each other and reduce the stress.';
	$reg_para2 ='Emergency contact details should for the meeting inside city, outside city as per the vulnerability. Fill the given below detail and print and paste at near the phone on the wall so you can discuss on it time to time.';
    $reg_para3 = 'You can Print the card once you submit the details.';
    $fields_name = array(
    'Prefix',  /*0*/
    'First Name', /*1*/
    'Middle Name', /*2*/
    'Last Name', /*3*/
    'Emergency contact in your town- Name of person' , /*4*/
    'Contact number of emergency contact in your town',  /*5*/
    'Contact Address of Emergency contact in your town with name of person', /*6*/
    'Address', /*7*/
    'Pincode',/*8*/
    'State',/*9*/
    'District', /*10*/
    'Emergency contact outside your town- Name of person',/*11*/
    'Contact Number of Emergency contact outside your town', /*12*/
    'Contact Address of Emergency contact outside your town', /*13*/
    'Emergency meeting place outside city - Address', /*14*/
    'Neighbours name - 1', /*15*/
    'Neighbour Contact Number', /*16*/
    'Contact No. of Work Place 1', /*17*/
    'Contact No. of Work Place 2', /*18*/
    'Contact No. Of School / College of kids-1', /*19*/
    'Contact No. Of School / College of kids-2', /*20*/
    'Gas Agency', /*21*/
    'Emergency Gas Helpline number', /*22*/
    'Plumber', /*23*/
    'Emergency Plumber Helpline number', /*24*/
    'Neighbours name - 2', /*25*/ );
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
            <p  class="text-justify text-center my-1">{{$reg_para2}}</p>
            <p  class="text-justify text-center my-1">{{$reg_para3}}</p>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="row">
                <form action="" id="registrationForm" method="POST">
                    @csrf
                    <label value="question"><b>{{$fields_name[4]}}</b></label>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group">
                                <label for=""><b>{{$fields_name[0]}}</b></label>
                                <select name="emgpprefix" id="emgpprefix" class="form-select">
                                    <option value="Mr" {{ old('emgpprefix') == "Mr" ? 'selected' : '' }}>Mr</option>
                                    <option value="Ms" {{ old('emgpprefix') == "Ms" ? 'selected' : '' }}>Ms</option>
                                    <option value="Mrs" {{ old('emgpprefix') == "Mrs" ? 'selected' : '' }}>Mrs</option>
                                    <option value="Dr" {{ old('emgpprefix') == "Dr" ? 'selected' : '' }}>Dr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <div class="form-group">
                                <label for=""><b>{{$fields_name[1]}}</b></label>
                                <input name="emgpname" id="emgpname" type="text" class="form-control" placeholder="{{$fields_name[1]}}"  required="" value="{{old('emgpname')}}">
                                <br>
                                <label for=""><b>{{$fields_name[2]}}</b></label>
                                <input name="emgpmname" id="emgpmname" type="text" class="form-control" placeholder="{{$fields_name[2]}}"  required="" value="{{old('emgpmname')}}">
                                <br>
                                <label for=""><b>{{$fields_name[3]}}</b></label>
                                <input name="emgplname" id="emgplname" type="text" class="form-control" placeholder="{{$fields_name[3]}}"  required="" value="{{old('emgplname')}}">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label><b>{{$fields_name[5]}}</b></label>
                            <input name="emgpno" id="emgpno" type="number"
                                maxlength="10"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                class="form-control" placeholder="{{$fields_name[5]}}"  required="" value="{{old('emgpno')}}">
                        </div>
                        <div class="form-group mt-3">
                            <label><b>{{$fields_name[6]}}</b></label>
                            <textarea  id="emgpaddress" name="emgpaddress" rows="4" cols="60">
                            </textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[8]}}</b></label>
                            <input name="emgppincode" id="emgppincode" type="number" class="form-control"
                            maxlength="6"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            placeholder="{{$fields_name[8]}}" required="" value="{{old('emgppincode')}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[9]}}</b></label>
                            <input name="emgpstate" id="emgpstate" type="text" class="form-control" placeholder="{{$fields_name[9]}}"  required="" value="{{old('emgpstate')}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[10]}}</b></label>
                            <input name="emgpdistrict" id="emgpdistrict" type="text" class="form-control" placeholder="{{$fields_name[10]}}"required="" value="{{old('emgpdistrict')}}">
                           <br/>
                        </div>
                        <label value="question"><b>{{$fields_name[11]}}</b></label>
                        <div class="row mt-2">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label><b>{{$fields_name[0]}}</b></label>
                                    <select name="emgpoprefix" id="emgpoprefix" class="form-select">
                                        <option value="Mr" {{ old('emgpoprefix') == "Mr" ? 'selected' : '' }}>Mr</option>
                                        <option value="Ms" {{ old('emgpoprefix') == "Ms" ? 'selected' : '' }}>Ms</option>
                                          <option value="Mrs" {{ old('emgpoprefix') == "Mrs" ? 'selected' : '' }}>Mrs</option>
                                        <option value="Dr" {{ old('emgpoprefix') == "Dr" ? 'selected' : '' }}>Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <div class="form-group">
                                    <label for=""><b>{{$fields_name[1]}}</b></label>
                                    <input name="emgponame" id="emgponame" type="text" class="form-control" placeholder="{{$fields_name[1]}}"  required="" value="{{old('emgponame')}}">
                                    <br>
                                    <label for=""><b>{{$fields_name[2]}}</b></label>
                                    <input name="emgpomname" id="emgpomname" type="text" class="form-control" placeholder="{{$fields_name[2]}}"  required="" value="{{old('emgpomname')}}">
                                    <br>
                                    <label for=""><b>{{$fields_name[3]}}</b></label>
                                    <input name="emgpolname" id="emgpolname" type="text" class="form-control" placeholder="{{$fields_name[3]}}"  required="" value="{{old('emgpolname')}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><b>{{$fields_name[12]}}</b></label>
                                <input name="emgpocontno" id="emgpocontno" size=50
                                        type="number"
                                        maxlength="10"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        class="form-control" placeholder="{{$fields_name[12]}}"  required="" value="{{old('emgpocontno')}}">
                            </div>
                            <div class="form-group mt-3">
                                <label value="question"><b>{{$fields_name[13]}}</b></label>
                                <div class="form-group">
                                    <textarea  id="emgadd" name="emgadd" rows="4" cols="60">
                                    </textarea><br/><br/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label><b>{{$fields_name[8]}}</b></label>
                                 <input name="emgpincode" id="emgpincode" type="number"
                                 maxlength="6"
                                 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                  class="form-control" placeholder="{{$fields_name[8]}}" required="" value="{{old('emgpincode')}}">
                                <br/>
                            </div><div class="form-group">
                                <label><b>{{$fields_name[9]}}</b></label>
                                 <input name="emgstate" id="emgstate" type="text" class="form-control" placeholder="{{$fields_name[9]}}" required="" value="{{old('emgstate')}}">
                                <br/>
                            </div>
                            <div class="form-group">
                                <label><b>{{$fields_name[10]}}</b></label>
                                 <input name="outdistrict" id="emgdistrict" type="text" class="form-control" placeholder="{{$fields_name[10]}}" required="" value="{{old('emgdistrict')}}">
                                <br/>
                            </div>
                            <label value="question"><b>{{$fields_name[14]}}</b></label>
                            <div class="form-group">
                                <textarea  id="outaddress" name="outaddress" rows="4" cols="60">
                                </textarea><br/><br/>
                            </div>
                            <div class="form-group">
                                <label><b>{{$fields_name[8]}}</b></label>
                                 <input name="outpincode" id="outpincode" type="number"
                                 maxlength="6"
                                 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                  class="form-control" placeholder="{{$fields_name[8]}}" required="" value="{{old('outpincode')}}">
                                <br/>
                            </div><div class="form-group">
                                <label><b>{{$fields_name[9]}}</b></label>
                                 <input name="outstate" id="outstate" type="text" class="form-control" placeholder="{{$fields_name[9]}}" required="" value="{{old('outstate')}}">
                                <br/>
                            </div>
                            <div class="form-group">
                                <label><b>{{$fields_name[10]}}</b></label>
                                 <input name="outdistrict" id="outdistrict" type="text" class="form-control" placeholder="{{$fields_name[10]}}" required="" value="{{old('outdistrict')}}">
                                <br/>
                            </div>
                        </div>
                        <label value="question"><b>{{$fields_name[15]}}</b></label>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label><b>{{$fields_name[0]}}</b></label>
                                    <select name="negprefix" id="negprefix" class="form-select">
                                        <option value="Mr" {{ old('negprefix') == "Mr" ? 'selected' : '' }}>Mr</option>
                                        <option value="Ms" {{ old('negprefix') == "Ms" ? 'selected' : '' }}>Ms</option>
                                        <option value="Mrs" {{ old('negprefix') == "Mrs" ? 'selected' : '' }}>Mrs</option>
                                        <option value="Dr" {{ old('negprefix') == "Dr" ? 'selected' : '' }}>Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <div class="form-group">
                                    <label for=""><b>{{$fields_name[1]}}</b></label>
                                    <input name="negname" id="negname" type="text" class="form-control" placeholder="{{$fields_name[1]}}"  required="" value="{{old('negname')}}">
                                    <br>
                                    <label for=""><b>{{$fields_name[2]}}</b></label>
                                    <input name="negmname" id="negmname" type="text" class="form-control" placeholder="{{$fields_name[2]}}"  required="" value="{{old('negmname')}}">
                                    <br>
                                    <label for=""><b>{{$fields_name[3]}}</b></label>
                                    <input name="neglname" id="neglname" type="text" class="form-control" placeholder="{{$fields_name[3]}}"  required="" value="{{old('neglname')}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><b>{{$fields_name[16]}}</b></label>
                                <input name="negno" id="negno" size=50
                                        type="number"
                                        maxlength="10"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        class="form-control" placeholder="{{$fields_name[16]}}"  required="" value="{{old('negno')}}">
                            </div>
                        </div>

                        <label value="question"><b>{{$fields_name[25]}}</b></label>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label><b>{{$fields_name[0]}}</b></label>
                                    <select name="negprefix2" id="negprefix2" class="form-select">
                                        <option value="Mr" {{ old('negprefix2') == "Mr" ? 'selected' : '' }}>Mr</option>
                                        <option value="Ms" {{ old('negprefix2') == "Ms" ? 'selected' : '' }}>Ms</option>
                                        <option value="Mrs" {{ old('negprefix2') == "Mrs" ? 'selected' : '' }}>Mrs</option>
                                        <option value="Dr" {{ old('negprefix2') == "Dr" ? 'selected' : '' }}>Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <div class="form-group">
                                    <label for=""><b>{{$fields_name[1]}}</b></label>
                                    <input name="negname2" id="negname2" type="text" class="form-control" placeholder="{{$fields_name[1]}}"  required="" value="{{old('negname2')}}">
                                    <br>
                                    <label for=""><b>{{$fields_name[2]}}</b></label>
                                    <input name="negmname2" id="negmname2" type="text" class="form-control" placeholder="{{$fields_name[2]}}"  required="" value="{{old('negmname2')}}">
                                    <br>
                                    <label for=""><b>{{$fields_name[3]}}</b></label>
                                    <input name="neglname2" id="neglname2" type="text" class="form-control" placeholder="{{$fields_name[3]}}"  required="" value="{{old('neglname2')}}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""><b>{{$fields_name[16]}}</b></label>
                                <input name="negno2" id="negno2" size=50
                                        type="number"
                                        maxlength="10"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        class="form-control" placeholder="{{$fields_name[16]}}"  required="" value="{{old('negno2')}}">
                            </div>
                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[17]}}</b></label>
                                 <input name="wpno1" id="wpno1" type="number" class="form-control"
                                 maxlength="10"
                                 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                placeholder="{{$fields_name[17]}}"  required="" value="{{old('wpno2')}}">

                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[18]}}</b></label>
                                 <input name="wpno2" id="wpno2" type="number" class="form-control"
                                 maxlength="10"
                                 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                placeholder="{{$fields_name[18]}}"  required="" value="{{old('wpno2')}}">

                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[19]}}</b></label>
                                <input name="schno1" id="schno1" type="number" class="form-control"
                                    maxlength="10"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    placeholder="{{$fields_name[19]}}"  required="" value="{{old('schno1')}}">
                            </div>
                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[20]}}</b></label>
                                <input name="schno2" id="schno2" type="number" class="form-control"
                                    maxlength="10"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    placeholder="{{$fields_name[20]}}"  required="" value="{{old('schno2')}}">
                            </div>

                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[21]}}</b></label>
                                <input name="gas" id="gas" type="text" class="form-control" placeholder="Gas"  required="" value="{{old('gas')}}">
                            </div>
                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[22]}}</b></label>
                                <input name="gasno" id="gasno" type="number" class="form-control"
                                    maxlength="10"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    placeholder="{{$fields_name[22]}}"  required="" value="{{old('gasno')}}">
                            </div>

                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[23]}}</b></label>
                                <input name="plumber" id="plumber" type="text" class="form-control" placeholder="{{$fields_name[23]}}"  required="" value="{{old('plumber')}}">
                            </div>
                            <div class="form-group mt-3">
                                <label><b>{{$fields_name[24]}}</b></label>
                                <input name="plumberno" id="plumberno" type="number" class="form-control"
                                    maxlength="10"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    placeholder="{{$fields_name[24]}}"  required="" value="{{old('gasno')}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <br/><a class="btn btn-primary btn-block w-100" onclick="saveData()" href="{{route('famcard')}}">SUBMIT</a><br/>
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
    function saveData() {
        let emgInFullName = $('#emgpprefix').val() + " " + $('#emgpname').val() + " " + $('#emgpmname').val() + " " + $('#emgplname').val();

        let emgOutFullName = $('#emgpoprefix').val() + " " + $('#emgponame').val() + " " + $('#emgpomname').val() + " " + $('#emgpolname').val();

        let emgInNumber = $('#emgpno').val();
        let emgOutNumber = $('#emgpocontno').val();

        let emgInAddress = $('#emgpaddress').val() + ", " + $('#emgpstate').val() + ", " + $('#emgpdistrict').val() + ", " + $('#emgppincode').val();
        let emgOutAddress = $('#outaddress').val() + ", " + $('#outstate').val() + ", " + $('#outdistrict').val() + ", " + $('#outpincode').val();


        let neg1FullName = $('#negprefix').val() + " " + $('#negname').val() + " " + $('#negmname').val() + " " + $('#neglname').val();
        let neg2FullName = $('#negprefix2').val() + " " + $('#negname2').val() + " " + $('#negmname2').val() + " " + $('#neglname2').val();

        let neg1No = $('#negno').val();
        let neg2No = $('#negno2').val();

        let schoolNumber1 = $('#schno1').val();
        let schoolNumber2 = $("#schno2").val();
        let officeNumber1 = $('#wpno1').val();
        let officeNumber2 = $("#wpno2").val();

        localStorage.setItem('emgInsideTownName', emgInFullName);
        localStorage.setItem('emgInsideNumber', emgInNumber);
        localStorage.setItem('emgInsideAddress', emgInAddress);
        localStorage.setItem('emgOutsideTownName', emgOutFullName);
        localStorage.setItem('emgOutsideNumber', emgOutNumber);
        localStorage.setItem('emgOutsideAddress', emgOutAddress);
        localStorage.setItem('neg1Name', neg1FullName);
        localStorage.setItem('neg1Number', neg1No);
        localStorage.setItem('neg2Name', neg2FullName);
        localStorage.setItem('neg2Number', neg2No);
        localStorage.setItem('schoolNumber1', schoolNumber1);
        localStorage.setItem('schoolNumber2', schoolNumber2);
        localStorage.setItem('officeNumber1', officeNumber1);
        localStorage.setItem('officeNumber2', officeNumber2);
    }
</script>
@endsection
