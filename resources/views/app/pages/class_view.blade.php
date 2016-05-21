@extends('app.master')

@section('title', 'Index')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>{{$class->name}}</h1>
			</div>
		</div>
	</div>

	<div class="page-content">
		<div class="row">

			<div class="medium-8 columns">
				<main class="main-gym-list">

					<div class="gym-item">
	
						<img class="gym-image" src="{{ $class->image }}" alt="">
						<!-- <img class="gym-logo" src="{{$class->location->image}}" alt=""> -->

						<div class="meta red clearfix">
							<a href="#" class="arrow"></a>
							<a style="text-transform: uppercase;" href="#">CLASS: {{$class->name}}</a>
							<a style="text-transform: uppercase;" href="#">DURATION: {{$class->duration}}</a>
							<a style="text-transform: uppercase;" href="#">GYM: {{$class->location->name}}</a>
							<a style="text-transform: uppercase;" href="#">LOCATION: {{$class->location->location}}</a>
						</div>
					</div>

					<div class="gym-inner">
						<div class="row">
							<div class="medium-3 columns right text-center">
								<form action="{{ Url('dashboard/class/session/create') }}" method="post">
									<input hidden="true" value="{{ $class->id}}" name="class_id">
									<button  class="button" type="submit">Join Class</button>
								</form>
								<div class="gym-price"><span>Price: </span>${{$class->price}}</div>
							</div>
						</div>

						<h5>About the class</h5>
						<p>{{$class->description}}</p>
						<h5>Timetable</h5>
						<p>Monday: <span>5pm</span><br />
						Monday: <span>5pm</span><br />

						<section class="reviews">
							<h5>Reviews</h5>
							
							<div class="row collapse review-item">
								<div class="medium-1 columns">
									<img src="http://placehold.it/50x50" alt="">
								</div>
								@foreach($class->review as $review)
									<div class="medium-11 columns">
										<h4>{{$review->name}} 
											<span class="stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star empty"></i>
											</span>
										</h4>
										<h6>{{$review->created_at->diffForHumans()}}</h6>
										<p>{{$review->comment}}</p>
									</div>
								@endforeach
							</div>

							<div class="review-form">
								<h5>Leave a review</h5>
								<p>Your email address will not be published. Required fields are marked <em>*</em></p>
								<form method="post" action="/review/create" id="review-form">
									<input hidden="true"  name="_token" value="{{ csrf_token() }}">
									<input hidden="true"  name="class_id" value="{{$class->id}}">
									<p>
										<label>Name <em>*</em></label>
										<br />
										<input type="text" name="name" value="">
									</p>
									<p>
										<label>Email <em>*</em></label>
										<br />
										<input type="email" name="email" value="">
									</p>
									<p>
										<label>Website</label>
										<br />
										<input type="text" name="website" value="">
									</p>
									<p>
										<label>Comment</label>
										<br />
										<textarea name="comment"></textarea></span> 
									</p>
									<p>
										<input type="submit" value="Post" class="button" />
									</p>
								</form>
							</div>


						</section>
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