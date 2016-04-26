@extends('dashboard.master')

@section('title', 'Stores')

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
												<span class="caption-subject font-red-sunglo bold uppercase">Stores</span>
											</div>
											<div class="actions">
												<div class="portlet-input input-inline input-small">
													<div class="input-icon right">
														<i class="fa fa-plus"></i>
														<a class="form-control" href="/dashboard/store/create">
														Add Store </a>
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
																	<th width="50px">Thumb</th>
																	<th>Name</th>
																	<th>Address</th>
																	<th>Email</th>
																	<th>Phone</th>
																	<th width="80px">Action</th>
																</tr>
															</thead>
															<tbody>
																<i style="color: transparent;">{{$i = 1}}</i>
																@foreach($stores as $store)
																<tr>
																	<td>{{$i++}}</td>
																	@if($store->image == '' || $store->image == null)
																		<td><img src="{{ asset('images/noimage.png') }}" width="50px"></td>
																	@else
																		<td><img src="{{$store->image}}" width="50px"></td>
																	@endif
																	<td>{{$store->name}}</td>
																	<td>{{$store->address}}</td>
																	<td>{{$store->email}}</td>
																	<td>{{$store->number}}</td>
																	<td>
																		<a href="/dashboard/store/{{$store->id}}/edit"><i class="fa fa-pencil" title="Edit"></i></a>
																		<a href="/dashboard/store/{{$store->id}}/delete"><i class="fa fa-times" title="Remove"></i></a>
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