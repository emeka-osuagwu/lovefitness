<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-map-marker font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Gyms</span>
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
													<th width="50px">Thumb</th>
													<th>Name</th>
													<th>Address</th>
													<th>Class No</th>
													<th width="80px">Action</th>
												</tr>
											</thead>
											<tbody>
												<i style="color: transparent;">{{$i = 1}}</i>
												@foreach($gyms as $gym)
												<tr>
													<td>{{$i++}}</td>
													@if($gym->image == '' || $gym->image == null)
														<td><img src="{{ asset('images/noimage.png') }}" width="50px"></td>
													@else
														<td><img src="{{$gym->image}}" width="50px"></td>
													@endif
													<td>{{$gym->name}}</td>
													<td>{{$gym->address}}</td>
													<td>{{$gym->classes->count()}}</td>		
													<td>
														<a href="/dashboard/gym/{{$gym->id}}/edit"><i class="fa fa-pencil" title="Edit"></i></a>
														<a href="/dashboard/gym/{{$gym->id}}/delete"><i class="fa fa-times" title="Remove"></i></a>
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