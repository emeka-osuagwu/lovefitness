<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-fw fa-street-view font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Add a new Trainer</span>
							</div>
							<div class="actions">
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="post" action="{{ Url('dashboard/trainer/create') }}" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Brand Name</label>
										<div class="col-md-4">
											<input type="text" name="brand_name" class="form-control" value="" required="true">
										</div>
									</div>
							
									<div class="form-group">
										<label class="col-md-3 control-label">Gender</label>
										<div class="col-md-4">
											<select class="form-control" name="gender" required="true">
												<option value="" >Select Gender</option>
												<option value="male" >Male</option>
												<option value="female" >Female</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Price</label>
										<div class="col-md-4">
											<input type="number" name="price" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Address</label>
										<div class="col-md-4">
											<input type="text" name="address" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Phone</label>
										<div class="col-md-4">
											<input type="text" name="phone" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email</label>
										<div class="col-md-4">
											<input type="email" name="email" class="form-control" value="" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Facebook url</label>
										<div class="col-md-4">
											<input type="text" name="facebook" class="form-control" value="" >
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Instagram url</label>
										<div class="col-md-4">
											<input type="text" name="instagram" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Twitter url</label>
										<div class="col-md-4">
											<input type="text" name="twitter" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Other</label>
										<div class="col-md-4">
											<textarea name="others" class="form-control" rows="3" data-gramm="" data-txt_gramm_id="0e81abdf-9b51-5891-3c9f-d82719dfee4c"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Monday Time</label>
										<div class="col-md-4">
											<input type="text" name="monday" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Tuesday Time</label>
										<div class="col-md-4">
											<input type="text" name="tuesday" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Wednsday Time</label>
										<div class="col-md-4">
											<input type="text" name="wednsday" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Thursday Time</label>
										<div class="col-md-4">
											<input type="text" name="thursday" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Friday Time</label>
										<div class="col-md-4">
											<input type="text" name="friday" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Saturday Time</label>
										<div class="col-md-4">
											<input type="text" name="saturday" class="form-control" value="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Sunday Time</label>
										<div class="col-md-4">
											<input type="text" name="sunday" class="form-control" value="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Image</label>
										<div class="col-md-4">
											<input type="file" name="image">
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