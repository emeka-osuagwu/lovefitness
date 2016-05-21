@extends('dashboard.master')

@section('title', 'Colors')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				@include('dashboard.pages.includes.sections.left_nav')
				<div class="page-content-wrapper">
					<div class="page-content">
						<div class="page-head">
							<div class="row">
								<div class="col-md-12">
									<div class="portlet light bordered">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-map-marker font-red-sunglo"></i>
												<span class="caption-subject font-red-sunglo bold uppercase">Colors</span>
											</div>
											<div class="actions">
												<div class="portlet-input input-inline input-small">
													<div class="input-icon right">
														<i class="fa fa-plus"></i>
														<a class="form-control" href="/dashboard/gym/create">
														Add new Gym </a>
													</div>
												</div>
											</div>
										</div>
										<div class="portlet-body form">
											<div class="portlet">
												<div class="portlet-body">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th width="10px">ID</th>
																	<th>Name</th>
																	<th>Status</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<i style="color: transparent;">{{$i = 1}}</i>
																@foreach($colors as $color)
																<tr>
																	<td>{{$i++}}</td>
																	<td>{{$color->name}}</td>
																	@if($color->status ==  0 )
																		<td>In Active</td>
																	@else
																		<td>Active</td>
																	@endif
																	<td>
																		<a href="/dashboard/setting/color/{{$color->id}}/edit"><i class="fa fa-pencil" title="Edit"></i></a>
																		<a href="/dashboard/setting/color/{{$color->id}}/delete"><i class="fa fa-times" title="Remove"></i></a>
																	</td>
																</tr>
																@endforeach
															</tbody>
														</table>
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