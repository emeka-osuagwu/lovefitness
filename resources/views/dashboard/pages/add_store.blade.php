@extends('dashboard.master')

@section('title', 'Add Store')

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
												<span class="caption-subject font-red-sunglo bold uppercase">Add a Store</span>
											</div>
										</div>

										<div class="portlet-body form">
											@if (Session::has('message'))
									  	    	  	<script>
													swal({
														title: "Gym Added",
														type: "success",
														confirmButtonColor: "#298829",
														confirmButtonText: "OK",
														closeOnConfirm: false,
														closeOnCancel: false
													},
													function(isConfirm)
													{
														if (isConfirm) {
													  		window.location="/dashboard/gyms";
													  	}
													});
												</script>
											@endif  
											<form method="post" action="{{ Url('dashboard/store/create') }}" enctype="multipart/form-data" class="form-horizontal">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class="form-body">
													
													<div class="form-group">
														<label class="col-md-3 control-label">Name</label>
														<div class="col-md-4">
															<input type="text" name="name" class="form-control" required="true">
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Address</label>
														<div class="col-md-4">
															<input type="text" name="address" class="form-control" value="" required="true">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-md-3 control-label">Location</label>
														<div class="col-md-4">
															<select class="form-control" name="location" required="true">
																<option>Select Location</option>
																<option value="Lekki">Lekki</option>
																<option value="Ikoyi">Ikoyi</option>
																<option value="Victoria Island">Victoria Island</option>
																<option value="Oniru">Oniru</option>
																<option value="Ikeja">Ikeja</option>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Phone</label>
														<div class="col-md-4">
															<input type="number" name="phone" class="form-control" value="" required="true">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-md-3 control-label">longitude</label>
														<div class="col-md-4">
															<input type="text" name="longitude" class="form-control" value="" required="true">
														</div>
													</div>	

													<div class="form-group">
														<label class="col-md-3 control-label">latitude</label>
														<div class="col-md-4">
															<input type="text" name="latitude" class="form-control" value="" required="true">
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Email</label>
														<div class="col-md-4">
															<input type="email" name="email" class="form-control" value="" required="true">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Website</label>
														<div class="col-md-4">
															<input type="text" name="website" class="form-control" value="" required="true">
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
															<a type="button"  href="{{  Url('dashboard/gyms') }}" class="btn default">Cancel</a>
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
			</div>
		</div>
@endsection