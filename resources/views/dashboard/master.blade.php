<html class="no-js" lang="en">
	<head>
		<title>Lovefitness - @yield('title')</title>
		@include('dashboard.pages.includes.sections.link')
		@include('dashboard.pages.includes.sections.script')
	</head>
	<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
		@yield('content')
	</body>
	<script src="{!! load_asset('vue/app/ClassController.js') !!}" type="text/javascript"></script>
</html>