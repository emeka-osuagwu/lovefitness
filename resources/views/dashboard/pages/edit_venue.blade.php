@extends('dashboard.master')

@section('title', 'Edit Venue')

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
											<span class="caption-subject font-red-sunglo bold uppercase">Edit Venue</span>
										</div>
									</div>
									<div class="portlet-body form">

										@if (Session::has('message'))
								  	    	  	<script>
												swal({
													title: "Venue Updated",
													type: "success",
													confirmButtonColor: "#298829",
													confirmButtonText: "OK",

													closeOnConfirm: false,
													closeOnCancel: false
												},
												function(isConfirm)
												{
													if (isConfirm) {
												  		window.location="/dashboard/venues";
												  	}
												});
											</script>
										@endif  			
										<!-- BEGIN FORM-->
										<form method="post" action="{{ Url('dashboard/venue/update') }}" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="hidden" name="venue_id" value="{{$venue->id}}">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Name</label>
													<div class="col-md-4">
														<input type="text" name="name" class="form-control" value="{{$venue->name}}" required="true">
													</div>
												</div>
					
												<div class="form-group">
													<label class="col-md-3 control-label">Address</label>
													<div class="col-md-4">
														<input type="text" name="address" class="form-control" value="{{$venue->address}}" required="true">
													</div>
												</div>
											
												<div class="form-group">
													<label class="col-md-3 control-label">Phone Number</label>
													<div class="col-md-4">
														<input type="text" name="phone" class="form-control" value="{{$venue->phone}}" required="true">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Email</label>
													<div class="col-md-4">
														<input type="text" name="email" class="form-control" value="{{$venue->email}}" required="true">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Website</label>
													<div class="col-md-4">
														<input type="text" name="website" class="form-control" value="{{$venue->website}}" required="true">
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
		</div>
	</div>
@endsection