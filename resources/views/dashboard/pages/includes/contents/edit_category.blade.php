<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-basket font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Edit Category</span>
							</div>
						</div>

						<div class="portlet-body form">
							
							<form method="post" action="{{ Url('dashboard/class/category/update') }}" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="category_id" value="{{ $category->first()->id }}">
								<div class="form-body">
								@if (Session::has('message'))
					  	    	  	<script>
									swal({
										title: "Category updated",
										type: "success",
										confirmButtonColor: "#298829",
										confirmButtonText: "OK",
										closeOnConfirm: false,
										closeOnCancel: false
									},
									function(isConfirm)
									{
										if (isConfirm) {
									  		window.location="/dashboard/class/categorys";
									  	}
									});
								</script>
							@endif  
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" required="true" value="{{$category->first()->name}}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Color</label>
										<div class="col-md-4">
											<select class="form-control" name="color" required="true">
												<option style="text-transform: capitalize" value="{{$category->first()->color}}" >{{$category->first()->color}}</option>
												<option value="red" >Red</option>
												<option value="blue" >Blue</option>
												<option value="purple" >Purle</option>
												<option value="Orange" >Orange</option>
											</select>
										</div>
									</div>
																
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<a href="http://localhost:8000/dashboard/class/categorys" class="btn default">Cancel</a>
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