@extends('dashboard.master')

@section('title', 'Admin')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
	<div class="page-container">
		<div class="page-sidebar-wrapper">
			@include('dashboard.pages.includes.sections.left_nav')
			<div class="page-content-wrapper">
				<div class="page-content" style="min-height:1497px">
					
					<div class="page-head">
						<div class="page-title">
							<h1>Admins</h1>
						</div>
					</div>

					<div class="portfolio-content portfolio-1">
				
						<div id="js-grid-juicy-projects" class="cbp cbp-caption-active cbp-caption-overlayBottomReveal cbp-ready" style="height: 799px;">
							<div class="cbp-item web-design logos" style="width: 323px; left: 0px; top: 0px;">
								<div class="cbp-item-wrapper">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="../assets/global/img/portfolio/600x600/05.jpg" alt=""> 
										</div>
										
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="../assets/global/plugins/cubeportfolio/ajax/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
													<a href="../assets/global/img/portfolio/1200x900/50.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
												</div>
											</div>
										</div>
									</div>

									<div class="cbp-l-grid-projects-title uppercase text-center">World Clock Widget</div>
									<div class="cbp-l-grid-projects-desc uppercase text-center">Logo / Web Design</div>
								</div>
							</div>
						</div>


						<div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
							<a href="../assets/global/plugins/cubeportfolio/ajax/loadMore.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
								<span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
								<span class="cbp-l-loadMore-loadingText">LOADING...</span>
								<span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
							</a>
						</div>
					</div>

					
					<!-- END PAGE BASE CONTENT -->
				</div>				
			</div>
		</div>
	</div>
@endsection