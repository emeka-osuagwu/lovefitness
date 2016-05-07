@extends('dashboard.master')

@section('title', 'Admin')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
	<div class="page-container">
		<div class="page-sidebar-wrapper">
			@include('dashboard.pages.includes.sections.left_nav')
			<div class="page-content-wrapper">
			<div class="page-content" style="min-height:1155px">
					<div class="row">
						<div class="col-md-12">
							<div class="portlet light portlet-fit bordered">
								<div class="portlet-title">
									<div class="caption">
										<i class=" icon-layers font-green"></i>
										<span class="caption-subject font-green bold uppercase">Default</span>
									</div>
								</div>
								<div class="portlet-body">
									<div class="mt-element-card mt-element-overlay">
										<div class="row">
											@foreach($admins as $admin)
												<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
													<div class="mt-card-item">
														<div class="mt-card-avatar mt-overlay-1" style="height: auto;">
															@if($admin->image == '' || $admin->image == null)
																<img src="{{ asset('images/noimage.png') }}" />
															@else
																<img src="{{$admin->image}}" />
															@endif
															<!-- 	
															<div class="mt-overlay">
																<ul class="mt-info">
																	<li>
																		<a class="btn default btn-outline" href="javascript:;">
																			<i class="icon-link"></i>
																		</a>
																	</li>
																</ul>
															</div>
															 -->
														</div>
														<div class="mt-card-content">
															<h3 class="mt-card-name">{{$admin->firstname}} {{$admin->lastname}}</h3>
															<!-- <p class="mt-card-desc font-grey-mint">Managing Director</p> -->
														</div>
													</div>
												</div>
											@endforeach
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