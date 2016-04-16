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
											<span data-counter="counterup" data-value="1349">{{$users->count()}}</span>
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
											<span data-counter="counterup" data-value="12,5">{{$catetgories->count()}}</span></div>
										<div class="desc"> Categories</div>
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
											<span data-counter="counterup" data-value="549">{{$groups->count()}}</span>
										</div>
										<div class="desc"> Groups</div>
									</div>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-v2 purple" href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<span data-counter="counterup" data-value="89">{{$classes->count()}}</span></div>
										<div class="desc">Classes </div>
									</div>
								</a>
							</div>
						</div>


						<div class="row">
							
							<div class="col-md-6 col-sm-6">
								<div class="portlet light bordered">
									<div class="portlet-title tabbable-line">
										<div class="caption">
											<i class="icon-bubbles font-dark hide"></i>
											<span class="caption-subject font-dark bold uppercase">Reviews</span>
										</div>
									</div>

									<div class="portlet-body">
										<div class="tab-content">
											<div class="tab-pane active" id="portlet_comments_1">
												<div class="mt-comments">
													<div class="mt-comment">
														<div class="mt-comment-img">
															<img src="../assets/pages/media/users/avatar1.jpg"> </div>
														<div class="mt-comment-body">
															<div class="mt-comment-info">
																<span class="mt-comment-author">Michael Baker</span>
																<span class="mt-comment-date">26 Feb, 10:30AM</span>
															</div>
															<div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
															<div class="mt-comment-details">
																<span class="mt-comment-status mt-comment-status-pending">Pending</span>
																<ul class="mt-comment-actions">
																	<li>
																		<a href="#">Quick Edit</a>
																	</li>
																	<li>
																		<a href="#">View</a>
																	</li>
																	<li>
																		<a href="#">Delete</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
@endsection