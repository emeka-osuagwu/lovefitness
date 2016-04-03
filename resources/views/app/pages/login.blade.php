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
					<form method="POST" action="{{ Url('user/login') }}">
						<input name="_token" value="{{ csrf_token() }}" type="hidden">
						<input name="email" value="" placeholder="Email" type="email" required="true">
						<input name="password" id="password" placeholder="Password" type="password" required="true">
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection