<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-asterisk font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Add  Class Group</span>
							</div>
						</div>

						<div class="portlet-body form">
							@if (Session::has('message'))
					  	    	  	<script>
									swal({
										title: "Group Added",
										type: "success",
										confirmButtonColor: "#298829",
										confirmButtonText: "OK",
										closeOnConfirm: false,
										closeOnCancel: false
									},
									function(isConfirm)
									{
										if (isConfirm) {
									  		window.location="/dashboard/class/groups";
									  	}
									});
								</script>
							@endif  
							<form method="post" action="{{ Url('dashboard/class/group/create') }}" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" required="true">
										</div>
									</div>


									<div class="form-group">
										<label class="col-md-3 control-label">Categories</label>
										<div class="col-md-4">
											<select class="form-control" name="category_id" required="true">
												<option value="" >Select Category</option>
												@foreach($categories as $category)
													<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
									</div>


								
									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-4">
											<textarea name="description" class="form-control" rows="3" data-gramm="" data-txt_gramm_id="67df7919-3d09-a00d-edd4-fcb4e09a27a4" required="true"></textarea>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>