<div class="page-content-wrapper">
	<div class="page-content" style="min-height:1231px">
		<div class="profile">
			<div class="tabbable-line tabbable-full-width">
				<div class="row">
					<div class="col-md-3">
						<ul class="list-unstyled profile-nav">
							<li>
								@if(Auth::user()->status == 0 || Auth::user()->status == null  )
									<img src="data:image/png;base64,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" class="img-responsive pic-bordered" alt="">
								@endif

								@if(Auth::user()->status == 1 || Auth::user()->status != null  )
									<img src="{{ Auth::user()->image }}" class="img-responsive pic-bordered" alt="">
								@endif
								<a href="{{ Url('dashboard/user/edit') }}" class="profile-edit"> edit </a>
							</li>
 							<!--
 							<li>
								<a href="javascript:;"> Projects </a>
							</li>
							<li>
								<a href="javascript:;"> Messages
									<span> 3 </span>
								</a>
							</li>
							<li>
								<a href="javascript:;"> Friends </a>
							</li>
							<li>
								<a href="javascript:;"> Settings </a>
							</li>
							 -->
						</ul>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-8 profile-info">
								
								@if(Auth::user()->status  == 1)
									<h1 class="font-green sbold uppercase">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h1>
								@endif
							
								<p>
									<a href=" javascript:;"> {{ Auth::user()->email }}</a>
								</p>
								<ul class="list-inline">
									<li>
										<i class="fa fa-map-marker"></i> {{Auth::user()->city}} </li>
									<li>
								</ul>
							</div>
				
						</div>
						<!--end row-->
						<div class="tabbable-line tabbable-custom-profile">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_11" data-toggle="tab" aria-expanded="true"> My Activite </a>
								</li>
								<li>
									<a href="#tab_1_22" data-toggle="tab" aria-expanded="true"> Feeds </a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1_11">
									<div class="portlet-body">
										<table class="table table-striped table-bordered table-advance table-hover">
											<thead>
												<tr>
													<th>
														<i class="fa fa-briefcase"></i> Class 
													</th>
													<th class="hidden-xs">
														<i class="fa fa-question"></i> Location 
													</th>
													<th>
														<i class="fa fa-bookmark"></i> Time 
													</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="javascript:;"> Pixel Ltd </a>
													</td>
													<td class="hidden-xs"> Server hardware purchase </td>
													<td> 52560.10$
														<span class="label label-success label-sm"> Paid </span>
													</td>
													<td>
														<a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!--tab-pane-->
								<div class="tab-pane" id="tab_1_22">
									<div class="tab-pane active" id="tab_1_1_1">
										<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 290px;"><div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1" data-initialized="1" style="overflow: hidden; width: auto; height: 290px;">
											<ul class="feeds">
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-success">
																	<i class="fa fa-bell-o"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> You have 4 pending tasks.
																	<span class="label label-danger label-sm"> Take action
																		<i class="fa fa-share"></i>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> Just now </div>
													</div>
												</li>
												<li>
													<a href="javascript:;">
														<div class="col1">
															<div class="cont">
																<div class="cont-col1">
																	<div class="label label-success">
																		<i class="fa fa-bell-o"></i>
																	</div>
																</div>
																<div class="cont-col2">
																	<div class="desc"> New version v1.4 just lunched! </div>
																</div>
															</div>
														</div>
														<div class="col2">
															<div class="date"> 20 mins </div>
														</div>
													</a>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-danger">
																	<i class="fa fa-bolt"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 24 mins </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-info">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 30 mins </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-success">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 40 mins </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-warning">
																	<i class="fa fa-plus"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New user registered. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 1.5 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-success">
																	<i class="fa fa-bell-o"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> Web server hardware needs to be upgraded.
																	<span class="label label-inverse label-sm"> Overdue </span>
																</div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 2 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-default">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 3 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-warning">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 5 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-info">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 18 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-default">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 21 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-info">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 22 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-default">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 21 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-info">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 22 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-default">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 21 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-info">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 22 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-default">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 21 hours </div>
													</div>
												</li>
												<li>
													<div class="col1">
														<div class="cont">
															<div class="cont-col1">
																<div class="label label-info">
																	<i class="fa fa-bullhorn"></i>
																</div>
															</div>
															<div class="cont-col2">
																<div class="desc"> New order received. Please take care of it. </div>
															</div>
														</div>
													</div>
													<div class="col2">
														<div class="date"> 22 hours </div>
													</div>
												</li>
											</ul>
										</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
									</div>
								</div>
								<!--tab-pane-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>