@extends('app.master')

@section('title', 'Index')

@section('content')
	@include('app.pages.includes.sections.top_nav')
	
	<div class="page-header">
		<div class="row">
			<div class="columns">
				<h1>Class</h1>
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
					@foreach($datas['classes'] as $data)
						<div class="gym-item">
							<a href="/classes/{{$data->name}}">
							<img style="height:379px;"  class="gym-image" src="{{ $data->image == '' ? asset('images/no_image_2.png') : $data->image }}" alt="">
							<img width="100" class="gym-logo" src="{{ $data->image == '' ? asset('images/noimage.png') : $data->logo }}" alt="">

							<div class="meta red clearfix">
								<a href="/class/view" class="arrow"></a>
								<a style="text-transform: uppercase;" href="#">CLASS: {{$data->first()->name}}</a>
								<a style="text-transform: uppercase;" href="#">DURATION: {{$data->first()->duration}}</a>
								<a style="text-transform: uppercase;" href="#">GYM: ABC GYM</a>
								<a style="text-transform: uppercase;" href="#">LOCATION: IKOYI</a>
							</div>
							</a>
						</div>
					@endforeach
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