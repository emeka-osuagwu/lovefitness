<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-slideshare font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Edit  class</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post" action="{{ Url('dashboard/class/update') }}" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="class_id" value="{{ $class->id }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" value="{{$class->name}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Group</label>
										<div class="col-md-4">
											<select class="form-control" name="category_id" required="true">
													<option value="{{$class->gym->first()->name}}" >{{$class->gym->first()->name}}</option>
													@foreach($class_group as $group)
													<option value="{{$group->first()->id}}">{{$group->first()->name}}</option>
													@endforeach
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Gym</label>
										<div class="col-md-4">
											<select class="form-control" name="gym_id" required="true">
												<option value="">Select Gym</option>
													@foreach($gyms as $gym)
													<option value="{{$gym->id}}">{{$gym->name}}</option>
													@endforeach
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Price</label>
										<div class="col-md-4">
											<input type="text" name="price" class="form-control" value="{{$class->price}}" required="true">
										</div>
									</div>
						
									<div class="form-group">
										<label class="col-md-3 control-label">Class Time</label>
										<div class="col-md-4">
											<input type="text" name="time" class="form-control" value="{{$class->time}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Class Duration</label>
										<div class="col-md-4">
											<input type="text" name="duration" class="form-control" value="{{$class->duration}}" required="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Instructor</label>
										<div class="col-md-4">
											<select class="form-control" name="instructor_id" required="true">
												<option value="fwweqe" selected="selected">No instructor selected</option>
											</select>
										</div>
									</div>
																		
									<div class="form-group">
										<label class="col-md-3 control-label">Image</label>
										<div class="col-md-4">
											<input type="file" name="image" required="true">
										</div>
									</div>
																		
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>