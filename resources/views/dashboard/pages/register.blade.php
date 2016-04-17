@extends('dashboard.auth')

@section('title', 'Register')

<body class=" login" style="overflow:hidden">
	<div class="user-login-5">
		<div class="row bs-reset">
			<div class="col-md-6 login-container bs-reset">
				<img class="login-logo login-6" src="../assets/pages/img/login/login-invert.png" />
				<div class="login-content">
					<h1>Lovefitness Register</h1>
					<p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
					

					<form action="{{ Url('register') }}" class="login-form" method="post">
						
						<div class="alert alert-danger display-hide" style="display: block;">
							<span class="close" data-close="alert"></span>
							<span>Enter any username and password. </span>
						</div>
						
						<input hidden="true" value="{{ csrf_token() }}" name="_token">
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button>
							<span>Enter any username and password. </span>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" required/>
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
								<a href="/login" class="btn blue">Sign In</a>
								<button class="btn blue" type="submit">Sign Up</button>
							</div>
						</div>
					</form>
					<!-- BEGIN FORGOT PASSWORD FORM -->
					<form class="forget-form" action="javascript:;" method="post">
						<h3 class="font-green">Forgot Password ?</h3>
						<p> Enter your e-mail address below to reset your password. </p>
						<div class="form-group">
							<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> 
						</div>
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
</body>