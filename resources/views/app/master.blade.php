
<html class="no-js" lang="en">
	<head>
		<title>Lovefiness - @yield('title')</title>
		@include('app.pages.includes.sections.link')
		@include('app.pages.includes.sections.script')
	</head>
	<body>
		@yield('content')

		<div id="app"></div>

		@include('app.pages.includes.sections.footer')
		<script src="{!! load_asset('vue/vue.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('vue/router.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('vue/app/ClassController.js') !!}" type="text/javascript"></script>
	</body>
</html>