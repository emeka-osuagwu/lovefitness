@extends('dashboard.master')

@section('title', 'Index')

@section('content')
	@include('dashboard.pages.includes.sections.top_nav')
	<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				@include('dashboard.pages.includes.sections.left_nav')
				
				<div class="page-content-wrapper">	
					<div class="page-content" style="min-height:509px">
		
						<div class="row">
							<div class="col-md-12">
								<div class="profile-sidebar">
									<div class="portlet light profile-sidebar-portlet bordered">
										<div class="profile-userpic">
											<img style="height: 150px" src="http://res.cloudinary.com/lovefitness/image/upload/v1464080120/wuslsmzu1qs3iphqsa7w.jpg" class="img-responsive" alt=""> 
										</div>
										
										<div class="profile-usertitle">
											<div class="profile-usertitle-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname}} </div>
											@if(Auth::user()->role == 1 || Auth::user()->role == 2)
												<div class="profile-usertitle-job"> Admin </div>				
											@endif											
										</div>
										
										<div class="profile-userbuttons">
											<button type="button" class="btn btn-circle green btn-sm">Follow</button>
											<button type="button" class="btn btn-circle red btn-sm">Message</button>
										</div>
								
										<div class="profile-usermenu">
											<ul class="nav">
												<li>
													<a href="page_user_profile_1.html"><i class="icon-home"></i> Overview </a>
												</li>
												<li class="active">
													<a href="page_user_profile_1_account.html"><i class="icon-settings"></i> Account Settings </a>
												</li>
												<li>
													<a href="page_user_profile_1_help.html"><i class="icon-info"></i> Help </a>
												</li>
											</ul>
										</div>
									</div>
								
									<div class="portlet light bordered">
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="uppercase profile-stat-title"> 37 </div>
												<div class="uppercase profile-stat-text"> Projects </div>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="uppercase profile-stat-title"> 51 </div>
												<div class="uppercase profile-stat-text"> Tasks </div>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="uppercase profile-stat-title"> 61 </div>
												<div class="uppercase profile-stat-text"> Uploads </div>
											</div>
										</div>
										
										<div>
											<div class="margin-top-20 profile-desc-link">
												<i class="fa fa-gmail"></i>
												<a href="http://www.twitter.com/keenthemes/">{{Auth::user()->email}}</a>
											</div>
											<div class="margin-top-20 profile-desc-link">
												<i class="fa fa-phome"></i>
												<a href="#">{{Auth::user()->phone}}</a>
											</div>
										</div>
									</div>
									
								</div>
								
								<div class="profile-content">
									<div class="row">
										<div class="col-md-12">
											<div class="portlet light bordered">
												<div class="portlet-title tabbable-line">
													<div class="caption caption-md">
														<i class="icon-globe theme-font hide"></i>
														<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
													</div>
													<ul class="nav nav-tabs">
														<li class="active">
															<a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Personal Info</a>
														</li>
														<li class="">
															<a href="#tab_1_3" data-toggle="tab" aria-expanded="false">Change Password</a>
														</li>
													</ul>
												</div>

												<div class="portlet-body">
													<div class="tab-content">
														
														<div class="tab-pane active" id="tab_1_1">
															<input type="hidden" name="_token" value="{{ csrf_token() }}">
															<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
														
															<div class="form-group">
																<label class="control-label">First Name</label>
																<input type="text" name="firstname" required="true"  value="{{Auth::user()->firstname}}" class="form-control"> 
															</div>
														
															<div class="form-group">
																<label class="control-label">Last Name</label>
																<input type="text" name="lastname" required="true" value="{{Auth::user()->lastname}}" class="form-control"> 
															</div>
															
															<div class="form-group">
																<label class="control-label">Email</label>
																<input type="email" name="email" required="true" value="{{Auth::user()->email}}" class="form-control">
															</div>

															<div class="form-group">
																<label class="control-label">Mobile Number</label>
																<input type="number"  name="phone" required="true" value="{{Auth::user()->phone}}" class="form-control">
															</div>

															<div class="form-group">
																<label class="control-label">Address</label>
																<input type="text" name="address" required="true" value="{{Auth::user()->address}}" class="form-control">
															</div>

															<div class="form-group">
																<label class="control-label">Post Code</label>
																<input type="number" name="post_code" required="true" value="{{Auth::user()->post_code}}" class="form-control">
															</div>
															
															<div class="form-group">
																<label class="control-label">City</label>
																<input type="text" name="city" required="true" value="{{Auth::user()->city}}" class="form-control">
															</div>	

															<div class="form-group">
																<label class="control-label">Image</label>
																<input type="file" name="image"  value="{{Auth::user()->city}}" class="form-control">
															</div>

															<div class="margiv-top-10">
																<button class="btn green" type="submit"> Save Changes </button>
																@if(Auth::user()->status == 1)
																	<a href="{{ Url('dashboard') }}" class="btn default"> Cancel </a>
																@endif
															</div>
														</form>
														</div>
												
											
														<div class="tab-pane" id="tab_1_3">
															<form action="#">
																<div class="form-group">
																	<label class="control-label">Current Password</label>
																	<input type="password" class="form-control"> </div>
																<div class="form-group">
																	<label class="control-label">New Password</label>
																	<input type="password" class="form-control"> </div>
																<div class="form-group">
																	<label class="control-label">Re-type New Password</label>
																	<input type="password" class="form-control"> </div>
																<div class="margin-top-10">
																	<a href="javascript:;" class="btn green"> Change Password </a>
																	<a href="javascript:;" class="btn default"> Cancel </a>
																</div>
															</form>
														</div>
												
														<div class="tab-pane" id="tab_1_4">
															<form action="#">
																<table class="table table-light table-hover">
																	<tbody><tr>
																		<td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
																		<td>
																			<label class="uniform-inline">
																				<div class="radio"><span><input type="radio" name="optionsRadios1" value="option1"></span></div> Yes </label>
																			<label class="uniform-inline">
																				<div class="radio"><span class="checked"><input type="radio" name="optionsRadios1" value="option2" checked=""></span></div> No </label>
																		</td>
																	</tr>
																	<tr>
																		<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
																		<td>
																			<label class="uniform-inline">
																				<div class="checker"><span><input type="checkbox" value=""></span></div> Yes </label>
																		</td>
																	</tr>
																	<tr>
																		<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
																		<td>
																			<label class="uniform-inline">
																				<div class="checker"><span><input type="checkbox" value=""></span></div> Yes </label>
																		</td>
																	</tr>
																	<tr>
																		<td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
																		<td>
																			<label class="uniform-inline">
																				<div class="checker"><span><input type="checkbox" value=""></span></div> Yes </label>
																		</td>
																	</tr>
																</tbody></table>
																<!--end profile-settings-->
																<div class="margin-top-10">
																	<a href="javascript:;" class="btn red"> Save Changes </a>
																	<a href="javascript:;" class="btn default"> Cancel </a>
																</div>
															</form>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE CONTENT -->
							</div>
						</div>
						<!-- END PAGE BASE CONTENT -->
					</div>
					<!-- END CONTENT BODY -->
				</div>
			
			</div>
		</div>
@endsection