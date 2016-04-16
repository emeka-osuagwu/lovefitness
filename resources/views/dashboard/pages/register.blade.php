@extends('dashboard.auth')

@section('title', 'login')

<html lang="en">

	<body class=" login" style="overflow:hidden">
	
		<div class="user-login-5">
			<div class="row bs-reset">
				<div class="col-md-6 login-container bs-reset">
					<img class="login-logo login-6" src="../assets/pages/img/login/login-invert.png" />
					<div class="login-content">
						<h1>Lovefitness Register</h1>
						<p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
						<form action="javascript:;" class="login-form" method="post">
							<div class="alert alert-danger display-hide">
								<button class="close" data-close="alert"></button>
								<span>Enter any username and password. </span>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="username" required/>
								 </div>
								<div class="col-xs-6">
									<input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/>
								 </div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									
								</div>
								<div class="col-sm-8 text-right">
									<div class="forgot-password">
										<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
									</div>
									<button class="btn blue" type="submit">Sign Up</button>
									<a href="/login" class="btn blue">Sign In</a>
								</div>
							</div>
						</form>
						<!-- BEGIN FORGOT PASSWORD FORM -->
						<form class="forget-form" action="javascript:;" method="post">
							<h3 class="font-green">Forgot Password ?</h3>
							<p> Enter your e-mail address below to reset your password. </p>
							<div class="form-group">
								<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
							<div class="form-actions">
								<button type="button" id="back-btn" class="btn grey btn-default">Back</button>
								<button type="submit" class="btn blue btn-success uppercase pull-right">Submit</button>
							</div>
						</form>
						<!-- END FORGOT PASSWORD FORM -->
					</div>
					<div class="login-footer">
						<div class="row bs-reset">
							<div class="col-xs-5 bs-reset">
								<ul class="login-social">
									<li>
										<a href="javascript:;">
											<i class="icon-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="javascript:;">
											<i class="icon-social-twitter"></i>
										</a>
									</li>
									<li>
										<a href="javascript:;">
											<i class="icon-social-dribbble"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-xs-7 bs-reset">
								<div class="login-copyright text-right">
									<p>Copyright &copy; Keenthemes 2015</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 bs-reset">
					<img style="height:100%" src="http://larrynorthfitness.com/wp-content/blog/uploads/2015/03/5-Ways-to-Make-Your-Workout-Social.jpg">
				</div>
			</div>
		</div>
		
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
	</body>

</html>