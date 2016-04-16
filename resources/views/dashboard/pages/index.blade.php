@extends('dashboard.master')

@section('title', 'Index')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				@include('dashboard.pages.includes.sections.left_nav')
				<div class="page-content-wrapper">
					<div class="page-content">
						
						<div class="row">
							
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-v2 blue" href="#">
									<div class="visual">
										<i class="fa fa-users"></i>
									</div>
									<div class="details">
										<div class="number">
											<span data-counter="counterup" data-value="1349">0</span>
										</div>
										<div class="desc"> Users </div>
									</div>
								</a>
							</div>

							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-v2 red" href="#">
									<div class="visual">
										<i class="fa fa-bar-chart-o"></i>
									</div>
									<div class="details">
										<div class="number">
											<span data-counter="counterup" data-value="12,5">12,5</span>M$ </div>
										<div class="desc"> Total Profit </div>
									</div>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-v2 green" href="#">
									<div class="visual">
										<i class="fa fa-shopping-cart"></i>
									</div>
									<div class="details">
										<div class="number">
											<span data-counter="counterup" data-value="549">549</span>
										</div>
										<div class="desc"> New Orders </div>
									</div>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-v2 purple" href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number"> +
											<span data-counter="counterup" data-value="89">89</span>% </div>
										<div class="desc"> Brand Popularity </div>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
@endsection