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


	<div class="page-content">
		<br>
		<form action="{{ Url('update') }}" method="post">
			<input name="_token" value="{{ csrf_token() }}" type="hidden">
			<div class="row">
				
				<div class="medium-6 columns">
					<div class="billing-address">
						<h3>Billing Details</h3>
						
						<div class="row">
							<div class="medium-6 columns">
								<label>First Name <em>*</em></label>
								<input name="firstname" value="{{ $user->firstname }}" type="text">
							</div>
							<div class="medium-6 columns">
								<label>Last Name <em>*</em></label>
								<input name="lastname" value="{{ $user->lastname }}" type="text">
							</div>
						</div>

						<div class="row">
							<div class="medium-6 columns">
								<label>Email <em>*</em></label>
								<input name="email" value="{{ $user->email }}" type="text">
								</div>
								<div class="medium-6 columns">
								<label>Phone <em>*</em></label>
								<input name="phone" value="{{ $user->phone }}" type="text">
							</div>
						</div>
						
						<label>Country <em>*</em></label>
						<input name="country" value="{{ $user->country }}" type="text">
						<label>Address <em>*</em></label>
						<input name="address" value="{{ $user->address }}" type="text">
					
						<div class="row">
							<div class="medium-6 columns">
								<label>Town/City <em>*</em></label>
								<input name="city" value="{{ $user->city }}" type="text">
							</div>
							<div class="medium-6 columns">
								<label>Postcode <em>*</em></label>
								<input name="post_code" value="{{ $user->post_code }}" type="text">
							</div>
						</div>

						<input value="Update" class="button" type="submit">
					</div>
				</div>

				<div class="medium-6 columns">
					<h3>Account</h3>
					<label>Password</label>
					<input name="current_password" type="password">
					<label>New Password</label>
					<input name="new_password" type="password">
					<label>New Password Repeat</label>
					<input name="new_password_confirmation" type="password">
				</div>
			</div>
		</form>
	</div>

@endsection