<div class="page-content-wrapper">
	<div class="page-content" style="min-height:1231px">

		<div class="profile">
			<div class="tabbable-line tabbable-full-width">
					<div class="row profile-account">
						<div class="col-md-3">
							<ul class="ver-inline-menu tabbable margin-bottom-10">
								<li class="active">
									<a data-toggle="tab" href="#tab_1-1" aria-expanded="false">
										<i class="fa fa-cog"></i> Personal info </a>
									<span class="after"> </span>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_2-2" aria-expanded="false">
										<i class="fa fa-picture-o"></i> Change Avatar </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_3-3" aria-expanded="false">
										<i class="fa fa-lock"></i> Change Password </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_4-4" aria-expanded="false">
										<i class="fa fa-eye"></i> Privacity Settings </a>
								</li>
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tab-content">
								<div id="tab_1-1" class="tab-pane active">
									<form role="form" action="{{ Url('dashboard/user/update') }}" method="post">
										
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										
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
											<input type="text" name="email" required="true" value="{{Auth::user()->email}}" class="form-control">
										</div>

										<div class="form-group">
											<label class="control-label">Mobile Number</label>
											<input type="text"  name="phone" required="true" value="{{Auth::user()->phone}}" class="form-control">
										</div>

										<div class="form-group">
											<label class="control-label">Address</label>
											<input type="text" name="address" required="true" value="{{Auth::user()->address}}" class="form-control">
										</div>

										<div class="form-group">
											<label class="control-label">Post Code</label>
											<input type="text" name="post_code" required="true" value="{{Auth::user()->post_code}}" class="form-control">
										</div>
										
										<div class="form-group">
											<label class="control-label">City</label>
											<input type="text" name="city" required="true" value="{{Auth::user()->city}}" class="form-control">
										</div>

										<div class="margiv-top-10">
											<button class="btn green" type="submit"> Save Changes </button>
											<a href="{{ Url('dashboard/user') }}" class="btn default"> Cancel </a>
										</div>
									</form>
								</div>

								<div id="tab_2-2" class="tab-pane">
									<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
										</p>
									<form action="#" role="form">
										<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
												<div>
													<span class="btn default btn-file">
														<span class="fileinput-new"> Select image </span>
														<span class="fileinput-exists"> Change </span>
														<input type="file" name="..."> </span>
													<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger"> NOTE! </span>
												<span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
											</div>
										</div>
										<div class="margin-top-10">
											<button class="btn green" type="submit"> Save Changes <button/>
											<a href="{{ Url('dashboard/user') }}" class="btn default"> Cancel </a>
										</div>
									</form>
								</div>
								<div id="tab_3-3" class="tab-pane">
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
								<div id="tab_4-4" class="tab-pane">
									<form action="#">
										<table class="table table-bordered table-striped">
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
											<button class="btn green" type="submit"> Save Changes <button/>
											<a href="{{ Url('dashboard/user') }}" class="btn default"> Cancel </a>
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