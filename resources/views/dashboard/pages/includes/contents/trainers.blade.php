<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-slideshare font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Trainer Categories</span>
							</div>
							<div class="actions">
								<div class="portlet-input input-inline input-small">
									<div class="input-icon right">
										<i class="fa fa-plus"></i>
										<a class="form-control" href="{{ Url('dashboard/trainer/create') }}">
										New Category </a>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body form">
							<div class="portlet">
								<div class="portlet-body">
									<div class="table-responsive">
										<!-- 
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="10px">ID</th>
													<th>Name</th>
													<th>Filter</th>
													<th>Color</th>
													<th>Class Count</th>
													<th width="80px">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Test</td>
													<td>Martial Arts</td>
													<td>orange</td>
													<td>1</td>
													<td>
														<a href="{{ Url('dashboard/trainer/1/edit') }}"><i class="fa fa-pencil" title="Edit"></i></a>
														<a href="{{ Url('dashboard/trainer/1/delete') }}"><i class="fa fa-times" title="Remove"></i></a>
													</td>
												</tr>
											</tbody>
										</table> 
										-->
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="10px">ID</th>
													<th width="50px">Thumb</th>
													<th>Name</th>
													<th>Brand Name</th>
													<th>Address</th>
													<th width="80px">Action</th>
												</tr>
											</thead>
											<tbody>
												<i style="color: transparent;">{{$i = 1}}</i>
												@foreach($trainers as $trainer)
												<tr>
													<td>{{$i++}}</td>
													<td><img src="http://www.cotdigtest4.com/images/trainers/lunch_1446380909_thumb.jpg" width="50px"></td>
													<td>{{$trainer->name}}</td>
													<td>{{$trainer->brand_name}}</td>
													<td>{{$trainer->address}}</td>
													<td>
														<a href="{{ Url('dashboard/trainer/1/edit') }}"><i class="fa fa-pencil" title="Edit"></i></a>
														<a href="{{ Url('dashboard/trainer/1/delete') }}"><i class="fa fa-times" title="Remove"></i></a>
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