@extends('master')

@section('title', 'Contact')

@section('content')
	@include('pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>Book</h1>
			</div>
		</div>
	</div>

	<div class="page-content">
		<div class="row">
	    		<div class="medium-8 columns">
				<main class="main">
					<p>Nulla</p>
					<br>
					<h3 style="color:#f65e13;">Getting in touch with Fitness Life</h3><br>
					<div class="contact-form">
						<form name="" action="" method="post" class="wpcf7-form" novalidate="novalidate">
							<p>
								<label>Name</label><br />
								<input type="text" name="your-name" value=""></p>
							<p>
								<label>Email</label>
								<br />
								<input type="email" name="your-email" value="">
							</p>
							<p>
								<label>Message</label><br />
								<textarea name="your-message"></textarea></span> 
							</p>
							<p>
								<input type="submit" value="Send" class="button" />
							</p>
						</form>
					</div>
				</main>
			</div>

					<div class="medium-4 columns">
				<aside class="sidebar">
					<div class="widget">
						<h4 class="widget-title yellow">Say Hello!<i></i></h4>

						<div class="widget-content">
							<p>
								<strong>Love Fitness</strong>
								<br>
								Address: 12 admitalty way lekki
								<br>
								Phone: 08083000000
								<br>
								E-mail: info@lovefitness.com.ng
								<br>
								Website: lovefitness.com.ng
							</p>
						</div>
					</div>	

					<div class="widget">
						<h4 class="widget-title orange">Featured<i></i></h4>
						<a href="#"><img src="{{asset('images/featured.jpg')}}" alt=""></a>
					</div>
				</aside> 
			</div>

		</div>
	</div>

@endsection