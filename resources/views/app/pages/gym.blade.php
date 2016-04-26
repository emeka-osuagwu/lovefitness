@extends('app.master')

@section('title', 'Gym')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>Gyms</h1>
			</div>
		</div>
	</div>

	<div class="page-content">

		<div class="row">
			<div class="medium-8 columns">
				<main class="main-gym-list">
					<div class="gym-item">
						<a href="/gym/{{$gym->first()->id}}">
						<img style="height:379px;"  class="gym-image" src="{{ $gym->first()->image == '' ? asset('images/no_image_2.png') : $gym->first()->image }}" alt="">

						<div class="meta red clearfix">
							<a href="/class/view" class="arrow"></a>
							<a style="text-transform: uppercase;" href="#">CLASS: {{$gym->first()->name}}</a>
							<!-- <a style="text-transform: uppercase;" href="#">DURATION: {{$gym->first()->first()->duration}}</a> -->
							<!-- <a style="text-transform: uppercase;" href="#">GYM: ABC GYM</a> -->
							<a style="text-transform: uppercase;" href="#">LOCATION: {{$gym->first()->location}}</a>
						</div>
						</a>
					</div>
				</main>

				<div class="gym-inner">
					
					<h5>About the gym</h5>
					<p>{{$gym->first()->description}}</p>

					<h5>Contact Information</h5>
					<p><strong>Address:</strong> {{$gym->first()->address}}</p>
					<p><strong>Phone: </strong>{{$gym->first()->number}}</p>
					<p><strong>Email:</strong> {{$gym->first()->email}}</p>
					<p><strong>Website:</strong> {{$gym->first()->website}} </p>


					<section class="reviews">
					
						<h5>Reviews</h5>
						@foreach($gym->first()->reviews as $review)
							<div class="row collapse review-item">
								<div class="medium-1 columns">
									<img src="http://lorempixel.com/800/600/people/?26265" alt="">
								</div>
								<div class="medium-11 columns">
									<h4>{{$review->name}}</h4>
									<h6>{{$review->created_at->diffForHumans()}}</h6>
									<p>{{$review->comment}}</p> 
								</div>
							</div>
						@endforeach

						<div class="review-form">
							<h5>Leave a review</h5>
							<p>Your email address will not be published. Required fields are marked <em>*</em></p>
							<form method="post" action="{{  Url('dashboard/gym/review/create') }}" id="review-form">
								<input hidden="true"  name="_token" value="{{ csrf_token() }}">
								<input hidden="true"  name="gym_id" value="{{$gym->first()->id}}">
								<p>
									<label>Name <em>*</em></label>
									<br />
									<input type="text" name="name" required="true" value="">
								</p>
								<p>
									<label>Email <em>*</em></label>
									<br />
									<input type="email" name="email" required="true" value="">
								</p>
								<p>
									<label>Website</label>
									<br />
									<input type="text" name="website" required="true" value="">
								</p>
								<p>
									<label>Comment</label>
									<br />
									<textarea name="comment"></textarea></span> 
								</p>
								<p>
									<input type="submit" required="true" value="Post" class="button" />
								</p>
							</form>
						</div>


					</section>

				</div>


			</div>

			<div class="medium-4 columns">
				<aside class="sidebar">
					
					<div class="widget">
						<h4 class="widget-title orange">Featured<i></i></h4>
						<a href="#"><img src="{{ asset('images/featured.jpg') }}" alt=""></a>
					</div>

					<div class="widget latest-posts">
						<h4 class="widget-title orange">Latest Post<i></i></h4>
						<ul>
							<li>
								<img src="{{ asset('images/image.jpg') }}" alt="image" />
								<div class="widget-content">
									<h5><a href="http://localhost/lovefitness/post-2/">Post 2</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus vel nibh in varius. Pellentesque eu elit quis mi tristique tempus in faucibus metus. Etiam lobortis placerat massa vestibulum scelerisque.</p>
								</div>
								<div class="meta clearfix">
								 	<p>31 March 2015 </p> <a href="#"><i class="fa fa-chevron-circle-right"></i></a>
								</div>
							</li>
						</ul>
					</div>
				</aside>  
			</div>


		</div>
	</div>

@endsection