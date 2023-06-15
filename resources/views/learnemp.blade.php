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
	$reg_para1='Fill the below form for your Family Emergency Response Card';
	$reg_para2='You can Print the card once you submit the details.';
    $fields_name = array('Do you know which disasters are likely to happen around you ?', 'Natural Disaster Affecting your Home', 'List of manmade disasters that can impact your family', 'Have you now sought the information on disasters?', 'Have you protected your Home?', 'Have you now sought the information on Home protection?', 'Have you protected your family?', 'Have you protected your property?', 'Have you now sought the information on property protection?', 'Have you protected your finance?', 'Have you now sought the information on finance protection?','Have you identified and protected your important documents?', 'Have you now sought the information on protecting important documents?');
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
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="row">
                <form action="" id="registrationForm" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for=""><b>{{$fields_name[0]}}</b></label>
                            <select name="que" id="que" class="form-select">
                                <option value="Yes" {{ old('que') == "Yes" ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ old('que') == "No" ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[1]}}</b></label>
                            <select name="que1" id="que1" class="form-select">
                                <option value="null">Select the disaster</option>
                                @foreach($natural_disasters as $d)
                                    <option value="{{$d->id}}" {{ old('que1') == $d ? 'selected' : '' }}>{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[2]}}</b></label>
                            <select name="que2" id="que2" class="form-select">
                                <option value="null">Select the disaster</option>
                                @foreach($manmade_disasters as $d)
                                    <option value="{{$d->id}}" {{ old('que1') == $d ? 'selected' : '' }}>{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[3]}}</b></label>
                            <input type="text" id="que3" name="que3" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[4]}}</b></label>
                            <button type="button" name="yes"  class="btn btn-success mx-3">Yes</button>
                            <button type="button" name="no" onclick="home()" class="btn btn-danger">No</button>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[5]}}</b></label>
                            <input type="text" id="ques" name="ques" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[6]}}</b></label>
                            <button type="button" name="yes"  class="btn btn-success mx-3">Yes</button>
                            <button type="button" name="no" class="btn btn-danger">No</button>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[7]}}</b></label>
                            <button type="button" name="yes"  class="btn btn-success mx-3">Yes</button>
                            <button type="button" name="no" onclick="property()" class="btn btn-danger">No</button>
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[8]}}</b></label>
                            <input type="text" id="que4" name="que4" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[9]}}</b></label>
                            <button type="button" name="yes"  class="btn btn-success mx-3">Yes</button>
                            <button type="button" name="no" onclick="finance()" class="btn btn-danger">No</button>
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[10]}}</b></label>
                            <input type="text" id="que5" name="que5" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[11]}}</b></label>
                            <button type="button" name="yes"  class="btn btn-success mx-3">Yes</button>
                            <button type="button" name="no" onclick="docx()" class="btn btn-danger">No</button>
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>{{$fields_name[12]}}</b></label>
                            <input type="text" id="que6" name="que6" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <br/><a class="btn btn-primary btn-block w-100" onclick="saveData()" href="{{route('evacuation')}}">SUBMIT</a><br/>
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
        let selectedNaturalDisaster = $('#que1').val();
        let selectedManmadeDisaster = $('#que2').val();
        let selectedNaturalDisasterName = $('#que1 :selected').text();
        let selectedManmadeDisasterName = $('#que2 :selected').text();
        localStorage.setItem('naturalDisaster',selectedNaturalDisaster);
        localStorage.setItem('manmadeDisaster',selectedManmadeDisaster);
        localStorage.setItem('naturalDisasterName',selectedNaturalDisasterName);
        localStorage.setItem('manmadeDisasterName',selectedManmadeDisasterName);
    }
    function home(){
        Swal.fire({
            width: '450px',

            title: '<strong>Home Protection</strong>',
            icon: 'question',
            html:
                '<h5>Inside Home</h5>'+
                '<strong>1.	Furniture</strong> – can fall – so needs to be fix to wall <br><strong>2. Old broken wooden or glasses </strong>can be cause of injury and discarding them gives space in the house and safety<br><strong>3. Electric appliances</strong>– can invite fire due to overloading or old electric wire system<br><br><h5>Outside Home</h5><strong>1.	Leakage</strong> – leakage can weaken the building and if not taken care at beginning can become costly to repair due to delay increases the deeper damage<br><strong>2.</strong> Check and, if necessary, repair any obvious weaknesses, such as cracks that are wider than 1⁄8 in (3 mm), in the structure of your house<br><strong>3. Crack in the building</strong> – it can be due to leakage or during the alteration by you your neighbours  - repair measure needs to take on emergency as delay can cause increase in cost of repair or if fall on someone can invite injury / disability / death<br><strong>4. Replace cracked or broken slates or tiles on the roof.</strong> Check that roof flashings are watertight. If any are loose or damaged, have them repaired or replaced<br><strong>5. Keep gutters and leaders clear</strong> and in good repair<br>	<strong>6. </strong>If your area is at risk of flooding, make sure that you have sufficient sandbags to block all potential water entry points, such as external doors and vents<br><strong>7.</strong>	Ensure that all adults in the home know how to turn off gas, electricity, and water at the main, in case you need to do so quickly<br>',
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Okay!',
        })
    }

    function property(){
        Swal.fire({
            width: '450px',

            title: '<strong>Property Protection</strong>',
        icon: 'question',
        html:

            '<strong>1.	</strong> 	Keep all your important documents related to property in safe place to project from fire / flood and this will help your family for early rehabilitation <br><strong>2.  </strong>	Get insurance coverage for the natural disaster and fire <br><strong>3.</strong>	Keep the property card in safe place<br><strong>4.</strong>  	Keep share certificate of society <br><strong>5.</strong>Take copy of all the above documents and put in seal cover and seal copy with trusted family members who staying away from city  <br><strong>6. </strong> 	Take copy of all the above documents and put in seal cover and seal copy with trusted family members who staying away from city <br><strong>7. </strong> 	Keep updating your property documents time to time <br>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Okay!',
        })
    }

    function finance(){
        Swal.fire({
            width: '450px',

            title: '<strong>Financial Protection</strong>',
        icon: 'question',
        html:

            '- Keep emergency cash  	<br>- Keep copy of your <br>1.	Bank account numbers<br>2.	Locker number & place where locker key is kept <br>3.	Fix deposit,<br>4.	Insurance documents, <br>5.	Mutual funds, <br>6.	Shares and debentures,<br>7.	Jewellery list of gold, silvers, diamonds – Keep in bank locker and take photograph with its weight detail and make note of it.  <br>8.	Credit or debit cards <br> - Take copy of all the above documents and put in seal cover and seal copy with trusted family members who staying away from city <br>-	Keep updating your property documents time to time  <br>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Okay!',
        })
    }

    function docx(){
        Swal.fire({
            width: '450px',

            title: '<strong>Protection of Important Documents </strong>',
        icon: 'question',
        html:

            'List of important document <br>-	Education Certificates<br> -	Birth certificate<br> -	Insurance policy <br>-	Health Insurance policy <br>-	Adhar Card<br>-	Ration Card<br>-	Pan Card<br>-	Passport <br>-	Group Photo of Family <br>•	Take copy of all the above documents and put in seal cover and seal copy with trusted family members who staying away from city <br>•	Keep updating your property documents time to time ',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Okay!',
        })
    }
</script>
@endsection
