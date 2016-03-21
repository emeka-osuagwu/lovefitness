@extends('master')

@section('title', 'Index')

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
			<div class="columns">
				<main class="main-posts">
					<ul class="medium-block-grid-3">        
						<li>
							<div class="post-item">
								<div class="post-image-wrapper">
									<a href="#"><img src="images/image.jpg" alt="image"></a>
								</div>

								<div class="post-item-content">
									<h3><a href="http://localhost/lovefitness/post-2/">Post 2</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus vel nibh in varius. Pellentesque eu elit quis mi tristique tempus in faucibus metus. Etiam lobortis placerat massa vestibulum scelerisque.</p>
								</div>
								<div class="meta clearfix purple">
									<p>31 March 2015   3 comments</p> <a class="arrow-wrapper" href="http://localhost/lovefitness/post-2/"><i class="fa fa-angle-right"></i></a>
									<i class="arrow"></i>
								</div>
							</div>
						</li>     
					</ul>
				</main>
			</div>
		</div>
	</div>
@endsection