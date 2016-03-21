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
	</div

	
<div class="page-content">

	<div class="row filter-toolbar">
		<div class="medium-3 columns filter-by">
			<label>Filter by: </label>
			<div class="filter-button">
				<span>Popular <i class="fa fa-caret-down"></i></span>
				<ul>
					<li><a href="#">Popular</a></li>
					<li><a href="#">Latest</a></li>
				</ul>
			</div>
		</div>
		<div class="medium-2 columns checkbox-column">
			<span class="checkbox-wrapper">
			  <input type="checkbox">
			</span>
			<label>Checkbox</label>
		</div>
		<div class="medium-7 columns">
			<a href="#" class="button orange">Martial Arts</a>
			<a href="#" class="button blue">Cardio</a>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<main>
				<ul class="medium-block-grid-3 class-categories">
					<li>

						<a href="/yoga/classes">
							<img src="images/swimming.jpg" alt="">
							<h3 class="red"><a href="#">Swimming</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod deleniti optio autem ducimus, minima recusandae corporis sunt, natus quos, consectetur sint voluptates! Hic voluptate quas, tempore cupiditate ipsum, illo explicabo non odio excepturi ducimus beatae sed ab temporibus minus. Laborum!</p>
						</a>
					</li>
				</ul>
			</main>
		</div>
	</div>
</div>
@endsection