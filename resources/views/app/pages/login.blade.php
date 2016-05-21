@extends('app.master')

@section('title', 'Login')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>Login</h1>
			</div>
		</div>
	</div>
	<br>

	@if(isset($message) == 'bad')
		<script>
			swal("Opps!", "Invalid email or password", "error")
		</script>
	@endif

	<div class="page-content">
		<div class="row">
			<div class="medium-4 columns medium-centered">
				<div class="register-box">
					<h3>Login</h3>
					<!-- 					
					<div class="alert alert-danger">
						<ul>
							<li>The firstname field is required.</li>
							<li>The lastname field is required	.</li>
							<li>The email field is required.</li>
							<li>The city field is required.</li>
							<li>The country field is required.</li>
							<li>The password field is required.</li>
						</ul>
					</div> -->
					<form method="POST" action="{{ Url('login') }}">
						<input name="_token" value="{{ csrf_token() }}" type="hidden">
						<input name="email" value="" placeholder="Email" type="email" required="true">
						<input name="password" id="password" placeholder="Password" type="password" required="true">
						<input class="button" value="Login" type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection