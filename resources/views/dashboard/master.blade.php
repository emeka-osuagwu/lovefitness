<html class="no-js" lang="en">
	<head>
		<title>Lovefitness - @yield('title')</title>
		@include('dashboard.pages.includes.sections.link')
		@include('dashboard.pages.includes.sections.script')
	</head>
	<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
		@yield('content')
	</body>
</html>