@extends('dashboard.master')

@section('title', 'Classes')

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
												<i class="fa fa-slideshare font-red-sunglo"></i>
												<span class="caption-subject font-red-sunglo bold uppercase">Class List</span>
											</div>
											<div class="actions">
												<div class="portlet-input input-inline input-small">
													<div class="input-icon right">
														<i class="fa fa-plus"></i>
														<a class="form-control" href="/dashboard/class/create">
														New Class </a>
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
																	<th>Group</th>
																	<th>Venue</th>
																	<th width="80px">Action</th>
																</tr>
															</thead>
															<tbody>
																<i style="color: transparent;">{{$i = 1}}</i>
																@foreach($classes as $class)
																<tr>
																	<td>{{$i++}}</td>
																	<td>{{$class->name}}</td>
																	<td>{{$class->group['name']}}</td>
																	<td><a href="dashboard/venue/{{$class->id}}">{{$class->location->name}}</a></td>
																	<td>
																		<a href="/dashboard/class/{{$class->id}}/edit" ><i class="fa fa-pencil" title="Edit"></i></a>
																		<a href="/dashboard/class/{{$class->id}}/delete"><i class="fa fa-times" title="Remove"></i></a>
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