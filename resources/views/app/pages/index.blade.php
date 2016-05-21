@extends('app.master')

@section('title', 'Index')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	@include('app.pages.includes.sections.banner')
	@include('app.pages.includes.sections.review')

	<div class="row">
		<div class="columns">
			<img class="empty-ribbon" src="images/empty-ribbon.jpg" alt="">
		</div>
	</div>
	
	<section class="home-boxes">
		<div class="row">
			<div class="medium-4 columns">
				<a href="{{ Url('gyms') }}"><img  style="width: 370px; height: 266px" src="images/find_a_gym.jpg" alt=""></a>
				<h3 class="red"><a href="#">Find/review a gym</a></h3>
			</div>

			<div class="medium-4 columns">
				<a href="#"><img  style="width: 370px; height: 266px" src="images/healthy places to shop.jpg" alt=""></a>
				<h3 class="blue"><a href="#">Healthy places to shop</a></h3>
			</div>

			<div class="medium-4 columns">
				<a href="http://localhost/lovefitness/classes"><img  style="width: 370px; height: 266px" src="images/review class.jpg" alt=""></a>
				<h3 class="red"><a href="http://localhost/lovefitness/classes">Find/review a class</a></h3>
			</div>

			<div class="medium-4 columns">
				<a href="http://localhost/lovefitness/blog"><img style="width: 370px; height: 266px" src="images/fresh on the blog.jpg" alt=""></a>
				<h3 class="orange"><a href="http://localhost/lovefitness/blog">Fresh on the blog</a></h3>
			</div>

			<div class="medium-4 columns">
				<a href="#"><img style="width: 370px; height: 266px" src="images/martial arts.jpg" alt=""></a>
				<h3 class="red"><a href="#">Play a sport</a></h3>
			</div>
			
			<div class="medium-4 columns">
				<a href="http://localhost/lovefitness/restaurants"><img  style="width: 370px; height: 266px"  src="images/lunch time options.jpg" alt=""></a>
				<h3 class="purple"><a href="http://localhost/lovefitness/restaurants">Healthy lunch time options</a></h3>
			</div>
		</div>
	</section>

	
@endsection