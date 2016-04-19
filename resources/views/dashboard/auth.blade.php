<html class="no-js" lang="en">
	
	<head>
		<meta charset="utf-8" />
		<title>Lovefitness | @yield('title') </title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="{!! load_asset('../assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! load_asset('../assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! load_asset('../assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! load_asset('../assets/global/plugins/uniform/css/uniform.default.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! load_asset('../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<link href="{!! load_asset('../assets/global/plugins/select2/css/select2.min.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! load_asset('../assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="{!! load_asset('../assets/global/css/components.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
		<link href="{!! load_asset('../assets/global/css/plugins.min.css') !!}" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="{!! load_asset('../assets/pages/css/login-5.min.css') !!}" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL STYLES -->
		<!-- BEGIN THEME LAYOUT STYLES -->
		<!-- END THEME LAYOUT STYLES -->
		<link rel="shortcut icon" href="favicon.ico" /> 
		<link href="{!! load_asset('/js/sweetalert.css') !!}" rel="stylesheet" type="text/css" />
		<script src="{!! load_asset('/js/sweetalert.min.js') !!}" type="text/javascript"></script>
      

	</head>

	@yield('content')


		<!--[if lt IE 9]>
			<script src="{!! load_asset('../assets/global/plugins/respond.min.js') !!}"></script>
			<script src="{!! load_asset('../assets/global/plugins/excanvas.min.js') !!}"></script> 
		<![endif]-->
	

		<script src="{!! load_asset('../assets/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/js.cookie.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/uniform/jquery.uniform.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="{!! load_asset('../assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/select2/js/select2.full.min.js') !!}" type="text/javascript"></script>
		<script src="{!! load_asset('../assets/global/plugins/backstretch/jquery.backstretch.min.js') !!}" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL SCRIPTS -->

		<!-- END THEME GLOBAL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="{!! load_asset('../assets/pages/scripts/login-5.min.js') !!}" type="text/javascript"></script>
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		<!-- END THEME LAYOUT SCRIPTS -->


</html>