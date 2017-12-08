<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
	<!-- Scripts -->
	<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
</head>
<body class="fixed-left">
    <div class="account-pages"></div>
	<div class="clearfix"></div>
	<div class="wrapper-page">
		@yield('content')
		
	</div>
	
	<script>
            var resizefunc = [];
    </script>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/detect.js') }}"></script>
	<script src="{{ asset('assets/js/fastclick.js') }}"></script>

	<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
	<script src="{{ asset('assets/js/waves.js') }}"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

	<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

	<!-- jQuery  -->
	<script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
	<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>



	<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

	<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

	<script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

	<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.app.js') }}"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.counter').counterUp({
				delay: 100,
				time: 1200
			});

			$(".knob").knob();

		});
	</script>
</body>
</html>
