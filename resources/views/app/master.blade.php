
<html class="no-js" lang="en">
	<head>
		<title>App Name - @yield('title')</title>
		@include('app.pages.includes.sections.link')
		@include('app.pages.includes.sections.script')
	</head>
	<body>
		@yield('content')
		
		@include('app.pages.includes.sections.footer')
		
		  <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.min.js"></script>
		  <script src="{!! load_asset('js/scripts/vue.js') !!}"></script>
		  <script src="{!! load_asset('js/scripts/js.js') !!}"></script>
	</body>
</html>