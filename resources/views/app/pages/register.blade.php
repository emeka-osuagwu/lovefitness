@extends('app.master')

@section('title', 'Register')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>Register</h1>
			</div>
		</div>
	</div>
	<br>

	@if(isset($message) == 'bad')
		<script>
			swal("Opps!", "Email already taken by another user", "error")
		</script>
	@endif

	<div class="page-content">
		<div class="row">
			<div class="medium-4 columns medium-centered">
				<div class="register-box">
					<h3>Register</h3>
					<form method="POST" action="{{ Url('register') }}">
						<input name="_token" value="{{ csrf_token() }}" type="hidden">
						<input name="email" value="" placeholder="Email" type="email" required="true">
						<input name="firstname" value="" placeholder="First Name" type="text" required="true">
						<input name="lastname" value="" placeholder="Last Name" type="text" required="true">
						<input name="address" value="" placeholder="Address" type="text" required="true">
						<input name="phone" value="" placeholder="Phone" type="text" required="true">
						<input name="post_code" value="" placeholder="Post Code" type="text" required="true">
						<input name="city" value="" placeholder="City" type="text" required="true">
						<input name="country" value="" placeholder="Country" type="text" required="true"> 
						<input name="password" id="password" placeholder="Password" type="password" required="true">
						<input class="button" value="Register" type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection