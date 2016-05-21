@extends('dashboard.master')

@section('title', 'Add Admin')

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
												<i class="fa fa-asterisk font-red-sunglo"></i>
												<span class="caption-subject font-red-sunglo bold uppercase">Add  Admin</span>
											</div>
										</div>

										<div class="portlet-body form">
											@if (Session::has('message'))
									  	    	  	<script>
													swal({
														title: "User Role Update",
														type: "success",
														confirmButtonColor: "#298829",
														confirmButtonText: "OK",
														closeOnConfirm: false,
														closeOnCancel: false
													},
													function(isConfirm)
													{
														if (isConfirm) {
													  		window.location="/dashboard/admins";
													  	}
													});
												</script>
											@endif  
											<form method="post" action="{{ Url('dashboard/admin/add') }}" enctype="multipart/form-data" class="form-horizontal">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">

													<div class="form-group">
														<label class="col-md-3 control-label">Users</label>
														<div class="col-md-4">
															<select class="form-control" name="user_id" required="true">
																<option value="" >Select User</option>
																@foreach($users->except(Auth::user()->id) as $user)
																	@if($user->firstname == null || $user->firstname == '' )
																		<option value="{{$user->id}}">{{$user->email}} </option>
																	@else
																		<option value="{{$user->id}}">{{$user->firstname}}</option>
																	@endif
																@endforeach
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-3 control-label">Assign Role</label>
														<div class="col-md-4">
															<select class="form-control" name="role" required="true">
																<option>Select User</option>
																<option value="0">Regular User</option>																
																<option value="2">Regular Admin</option>																
																<option value="1">Super Admin</option>																
															</select>
														</div>
													</div>
												
																				
												</div>	
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn green">Submit</button>
															<a href="{{ Url('dashboard/admins') }}"  class="btn default">Cancel</a>
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