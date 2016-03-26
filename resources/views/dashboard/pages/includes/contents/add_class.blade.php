<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-slideshare font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Add a class</span>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="post" action="/class/create" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Group</label>
										<div class="col-md-4">
											<select class="form-control" name="category_id" required="true">
												<option value="" >Select Group</option>
												@foreach($groups as $group)
													<option value="{{$groups->first()->id}}">{{$groups->first()->name}}</option>
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
													<option value="{{$gym->id}}">{{ $gym->name }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-4">
											<textarea name="description" class="form-control" rows="3" data-gramm="" data-txt_gramm_id="a1087645-ec36-2af3-8dd4-b2fbe0ad0dfa" required="true"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Price</label>
										<div class="col-md-4">
											<input type="text" name="price" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Location</label>
										<div class="col-md-4">
											<input type="text" name="address" class="form-control" value="" required="true">
										</div>
									</div>
								
									<div class="form-group">
										<label class="col-md-3 control-label">Class Time</label>
										<div class="col-md-4">
											<input type="text" name="time" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Class Duration</label>
										<div class="col-md-4">
											<input type="text" name="duration" class="form-control" value="" required="true">
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