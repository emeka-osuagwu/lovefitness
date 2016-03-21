@extends('app.master')

@section('title', 'Index')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>Book</h1>
			</div>
		</div>
	</div>

	<div class="page-content">
	
		<div class="row filter-toolbar">
			<div class="medium-3 columns location">
				<label>Location: </label>
				<div class="filter-button">
					<span>Lagos Fitness Gym <i class="fa fa-caret-down"></i></span>
					<ul>
						<li><a href="#">Gym 1</a></li>
						<li><a href="#">Gym 2</a></li>
						<li><a href="#">Gym 3</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="medium-8 columns">
				<main class="main-gym-list">
					@include('app.pages.includes.contents.list_two')
				</main>
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