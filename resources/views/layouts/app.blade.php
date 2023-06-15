@yield('php-code')
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Family Emergency Respond Card | RADHEE Disaster and Education Foundation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
	<link rel="manifest" href="{{ asset('frontend/icon/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('frontend/icon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">
	<!-- Google Fonts
		============================================ {{ asset('frontend/') }} -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- Font awesome CSS
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
    @yield('page-level-styles')
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
    @include('layouts.partials._header')

    <div class="middle_content_info">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: white;">
					<br/>
                    @yield('middle-content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials._footer')
    <!-- jquery
    ============================================ -->
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="{{ asset('js/app.js') }}"></script>
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
    <script src="{{ asset('frontend/js/icheck/icheck-active.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    @yield('page-level-scripts')

</body>
</html>
