<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

	<!-- BEGIN: Head-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
		<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
		<meta name="author" content="ThemeSelect">
		<title>Moto Tracker</title>
		@include('backend/layouts/headerScript')
	</head>
	<!-- END: Head-->
	
	<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

		<!-- BEGIN: Header-->
		<header class="page-topbar" id="header">
			@include('backend/layouts/header')
		</header>
		<!-- END: Header-->

		<!-- BEGIN: SideNav-->
			@include('backend/layouts/sidebar')
		<!-- END: SideNav-->

		<!-- BEGIN: Page Main-->
		@yield('content')
		<!-- END: Page Main-->

		<!-- BEGIN: Footer-->
		@include('backend/layouts/footer')
		<!-- END: Footer-->

		<!-- BEGIN VENDOR JS-->
		@include('backend/layouts/footerScript')
		<!-- END PAGE LEVEL JS-->
	</body>
</html>