
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Family Emergency Respond Card | RADHEE Disaster and Education Foundation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
	============================================ -->
  	<!--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">-->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/icon/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/icon/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/icon/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/icon/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/icon/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/icon/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/icon/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/icon/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/icon/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('frontend/icon/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/icon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/icon/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/icon/favicon-16x16.png') }}">
	<link rel="stylesheet" href="frontend/css/alreadyplan.css">

	<link rel="manifest" href="{{ asset('frontend/icon/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('frontend/icon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">
	<!-- Google Fonts
		============================================ {{ asset('frontend/') }} -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
	<!-- modernizr JS
		============================================ -->
	<script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
	<style>
		/* Create three unequal columns that floats next to each other */
		.column {
		  float: left;
		  padding: 5px;
		}

		.left, .right {
		  width: 20%;
		}

		.middle {
		  width: 60%;
		}
	</style>
</head>

<body>	
	
	<div class="header-top-area" style="padding: 0px;">
	<div class="container-fluid">
            <div class="row" style="margin:0px 0px;">
                <div class="column left">
                    <p align="left">       
                    </p>	
                </div>
                <div class="column middle">			
                    <p style="vertical-align: middle;">	
                        
                    </p>
                    <center><!--<img class="main-logo" src="img/self_immunity_check.png"/>-->
                    <br/>
                    <h2 style="color:white;">Family Disaster Plan</h2></center>
                </div>		
                <div class="column right">
                    <p align="right" style="margin: 0px 0px 0px 0px;">
                        <a href="#"><img class="main-logo" src="{{ asset('frontend/img/rd.png') }}" alt="" /></a>                  
                    </p>
                </div>	
            </div>
        </div>
    </div>
	
	<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
     
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--10 flex-flex flex-justifyContent--center">
          <h2><a href="#" rel="dofollow">Get the Plan</a></h2>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign in to your account</span>
              <form action="/existingplan" method="GET" id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email">
                </div>
                <div class="field padding-bottom--10">
                  <input type="submit" name="submit" value="Submit">
                </div>
				<BR>
                <div class="field padding-bottom--24">
				<center>
				<span><a href="{{route('alreadyplannum')}}">Use Phone Number</a></span>
				</center>
                </div>
				<!-- End: Disaster Table -->
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Create a Plan? <a href="{{route('index')}}">Click here</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
									
    <div class="footer-copyright-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
				<div class="footer-copy-right">
					<p style="color: yellow">© 2022. Copyright and all rights reserved by<br/>
					<a href="http://www.radhee.com/" id="radhee" target="_blank">RADHEE Disaster and Education Foundation</a>
					<br/><a href="https://radhee.com/disclaimer/">Disclaimer | </a><a href="https://radhee.com/privacy-policy/">Privacy Policy </a>
					<br/>Join or Follow or Like Us:						
					<br/><a href="https://www.facebook.com/RADHEE.Foundation">Facebook | </a><a href="https://www.instagram.com/radheengo/">Instagram | </a><a href="https://twitter.com/radhee_ngo">Twitter | </a><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFrqW1nUArirQAAAX9gQwuoA77sZK4ju_7UG9myQPGkRNDAFd0BvkOcvQUkZeh0lzis9j6HH9oYMWqdtYWOBuL77yWkOhQXY-R26ryH_7V8Z4gf8OJ_tKWjlpaSmoK4ELkgrLg=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fradhee%2F">LinkedIn | </a><a href="https://www.youtube.com/user/RADHEEFoundation">YouTube </a>
					</p>
				</div>                        
				</div>
			</div>
		</div>	
	</div>


	<!-- jquery
	============================================ -->
	<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<!-- plugins JS
		============================================ -->
	<script src="{{ asset('frontend/js/plugins.js') }}"></script>
	<!-- main JS
		============================================ -->
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	<!-- form validate JS
			============================================ -->
	<script src="{{ asset('frontend/js/form-validation/jquery.form.min.js') }}"></script>
	<script src="{{ asset('frontend/js/form-validation/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('frontend/js/form-validation/form-active.js') }}"></script>
	<!-- icheck JS
			============================================ -->
	<script src="{{ asset('frontend/js/icheck/icheck.min.js') }}"></script>
	<script src="{{ asset('frontend/js/icheck/icheck-active.js') }}">
		
</body>
</html>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
