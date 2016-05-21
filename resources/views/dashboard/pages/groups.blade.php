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
						<div class="page-head">
							<div class="row">
								<div class="col-md-12">
									<div class="portlet light bordered">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-asterisk font-red-sunglo"></i>
												<span class="caption-subject font-red-sunglo bold uppercase">Groups</span>
											</div>
											<div class="actions">
												<div class="portlet-input input-inline input-small">
													<div class="input-icon right">
														<i class="fa fa-plus"></i>
														<a class="form-control" href="{{ Url('/dashboard/class/group/create') }}">
														Add Group </a>
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
																	<th>Image</th>
																	<th>Name</th>
																	<th>Description</th>
																	<th>Category</th>
																	<th>Class No</th>
																	<th>View Class</th>
																	<th width="80px">Action</th>
																</tr>
															</thead>
															<tbody>
																<i style="color: transparent;">{{$i = 1}}</i>
																@foreach($groups as $group)
																<tr>
																	<td>{{$i++}}</td>
																		@if($group->image == '' || $group->image == null )
																			<td><img  width="40" src="{{asset('images/no_gym_group_image.jpg')}}"></td>
																		@else
																			<td><img  width="40" src="{{$group->image}}"></td>
																		@endif
																	<td>{{$group->name}}</td>
																	<td>{{$group->description}}</td>
																	<td>{{$group->category->name}}</td>
																	<td>{{$group->classes->count()}}</td>		
																	<td> 	
																		<a href="#" data-toggle="modal" data-target="#editModal10">View</a>
																		@include('dashboard.pages.includes.sections.group_class')
																	</td>	
																	<td>
																		<a href="/dashboard/class/group/{{$group->id}}/edit"><i class="fa fa-pencil" title="Edit"></i></a>
																		<a href="/dashboard/class/group/{{$group->id}}/delete"><i class="fa fa-times" title="Remove"></i></a>
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