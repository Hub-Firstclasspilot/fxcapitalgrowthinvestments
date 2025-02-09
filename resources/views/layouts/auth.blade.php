<!DOCTYPE html>
<html lang="en">

<head>

	<title>FX Capital - Investment Company</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
	<link rel="icon" href="../assets/images/logos/logo-fav.png" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="{{ asset('auth/fonts/fontawesome/css/fontawesome-all.min.css') }}">
	<!-- animation css -->
	<link rel="stylesheet" href="{{ asset('auth/plugins/animation/css/animate.min.css') }}">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    @stack('stylesheets')
</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="container auth-content">
		@yield('content')
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('auth/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('auth/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
@stack('scripts')
</body>

</html>