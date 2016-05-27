@extends('dashboard.master')

@section('title', 'Add Class')

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
												<span class="caption-subject font-red-sunglo bold uppercase">Add a class</span>
											</div>
										</div>
										
										<div class="portlet-body form">

											@if (Session::has('message'))
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
													  		window.location="/dashboard/class";
													  	}
													});
												</script>
											@endif  			
											<!-- BEGIN FORM-->
											<form method="post" action="{{ Url('dashboard/class/create') }}" enctype="multipart/form-data" class="form-horizontal">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class="form-body">
				                  
													<div class="form-group">
														<label class="col-md-3 control-label">Name</label>
														<div class="col-md-4">
															<input type="text" name="name" class="form-control" value="" required="true">
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Price</label>
														<div class="col-md-4">
															<input type="text" name="price" class="form-control" value="" required="true">
														</div>
													</div>
										
													<div class="form-group">
														<label class="control-label col-md-3">Class Time</label>
														<div class="col-md-4">
															<input type="text" name="time" class="form-control">
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Class Duration</label>
														<div class="col-md-4">
															<select class="form-control" name="duration" required="true">
																<option value="" >Select Duration</option>
																<option value="15min">15min</option>
																<option value="30min">30min</option>
																<option value="45min">45min</option>
																<option value="60min">60min</option>
															</select>
														</div>
													</div>


													<div class="form-group">
														<label class="col-md-3 control-label">Groups</label>
														<div class="col-md-4">
															<select class="form-control" name="group_id" required="true">
																<option value="" >Select Venue</option>
																@foreach($groups as $group)
																	<option value="{{$group->id}}">{{$group->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
										

													<div class="form-group">
														<label class="col-md-3 control-label">Location</label>
														<div class="col-md-4">
															<select class="form-control" name="location" required="true">
																<option value="" >Select Venue</option>
																@foreach($locations as $location)
																	<option value="{{$location->id}}">{{$location->name}}</option>
																@endforeach
															</select>
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
															<input type="file" name="image">
														</div>
													</div>	

													<div class="form-group">
														<label class="col-md-3 control-label">Logo</label>
														<div class="col-md-4">
															<input type="file" name="logo">
														</div>
													</div>
																						
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn green">Submit</button>
															<a type="button" href="{{ Url('dashboard/class') }}" class="btn default">Cancel</button>
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