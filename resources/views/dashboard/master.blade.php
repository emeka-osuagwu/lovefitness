<html class="no-js" lang="en">
	<head>
		<title>App Name - @yield('title')</title>
		@include('dashboard.pages.includes.sections.link')
		@include('dashboard.pages.includes.sections.script')
		<link rel="stylesheet" href=" {!! load_asset('js/sweetalert.css') !!}">
		<script src="{!! load_asset('js/sweetalert.min.js') !!}"></script>
	
	</head>
	<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
		@yield('content')
	</body>
	 <script src="{!! load_asset('/Vue/Controllers/DashboardCategoryController.js') !!}" type="text/javascript"></script>
</html>