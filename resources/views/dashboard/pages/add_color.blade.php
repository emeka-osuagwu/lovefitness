@extends('dashboard.master')

@section('title', 'Colors')

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
												<span class="caption-subject font-red-sunglo bold uppercase">Add a Color</span>
											</div>
										</div>
										
										<div class="portlet-body form">

											@if (Session::has('duplicate'))
												<script>
									  	    			swal("Color already Exist!", "Try again", "error")
												</script>
											@endif  

											@if (Session::has('success'))
									  	    	  	<script>
													swal({
														title: "Class Added",
														type: "success",
														confirmButtonColor: "#298829",
														confirmButtonText: "OK",

														closeOnConfirm: false,
														closeOnCancel: false
													},
													function(isConfirm)
													{
														if (isConfirm) {
													  		window.location="/dashboard/setting/colors";
													  	}
													});
												</script>
											@endif  


											<!-- BEGIN FORM-->
											<form method="post" action="{{ Url('dashboard/setting/add/color') }}" enctype="multipart/form-data" class="form-horizontal">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-3 control-label">Name</label>
														<div class="col-md-4">
															<input type="text" name="name[1]" class="form-control" value="" required="true">

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