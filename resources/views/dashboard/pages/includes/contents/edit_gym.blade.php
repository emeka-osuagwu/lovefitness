<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-basket font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Add a gym</span>
							</div>
						</div>

						<div class="portlet-body form">
							
							<form method="post" action="/dashboard/gym/update" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="gym_id" value="{{ $gym->id }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" value="{{$gym->name}}" required="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-4"><div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-basket font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Add a gym</span>
							</div>
						</div>

						<div class="portlet-body form">
							
							<form method="post" action="/dashboard/gym/update" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="gym_id" value="{{ $gym->id }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" value="{{$gym->name}}" required="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-4">
											<textarea name="d<div class="page-content-wrapper">
											<div class="page-content">
												<div class="page-head">
													<div class="row">
														<div class="col-md-12">
															<div class="portlet light bordered">
																<div class="portlet-title">
																	<div class="caption">
																		<i class="icon-basket font-red-sunglo"></i>
																		<span class="caption-subject font-red-sunglo bold uppercase">Add a gym</span>
																	</div>
																</div>

																<div class="portlet-body form">
																	
																	<form method="post" action="/dashboard/gym/update" enctype="multipart/form-data" class="form-horizontal">
																		<input type="hidden" name="_token" value="{{ csrf_token() }}">
																		<input type="hidden" name="gym_id" value="{{ $gym->id }}">
																		<div class="form-body">
																			<div class="form-group">
																				<label class="col-md-3 control-label">Name</label>
																				<div class="col-md-4">
																					<input type="text" name="name" class="form-control" value="{{$gym->name}}" required="true">
																				</div>
																			</div>

																			<div class="form-group">
																				<label class="col-md-3 control-label">Description</label>
																				<div class="col-md-4">
																					<textarea name="description" class="form-control" rows="3"  value=""  required="true">{{$gym->description}}</textarea>
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Opening Hours</label>
																				<div class="col-md-4">
																					<input type="text" name="hours" class="form-control" value="{{$gym->hours}}" required="true">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Membership Price</label>
																				<div class="col-md-4">
																					<input type="text" name="price" class="form-control" value="{{$gym->price}}" required="true">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Address</label>
																				<div class="col-md-4">
																					<input type="text" name="address" class="form-control" value="{{$gym->address}}" required="true">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Location</label>
																				<div class="col-md-4">
																					<input type="text" name="location" class="form-control" value="{{$gym->location}}" required="true">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Phone</label>
																				<div class="col-md-4">
																					<input type="text" name="phone" class="form-control"  value="{{$gym->number}}" required="true">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Email</label>
																				<div class="col-md-4">
																					<input type="text" name="email" class="form-control" value="{{$gym->email}}" required="true">
																				</div>
																			</div>
																			<div class="form-group">
																				<label class="col-md-3 control-label">Website</label>
																				<div class="col-md-4">
																					<input type="text" name="website" class="form-control" value="{{$gym->website}}" required="true">
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
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>escription" class="form-control" rows="3"  value=""  required="true">{{$gym->description}}</textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Opening Hours</label>
										<div class="col-md-4">
											<input type="text" name="hours" class="form-control" value="{{$gym->hours}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Membership Price</label>
										<div class="col-md-4">
											<input type="text" name="price" class="form-control" value="{{$gym->price}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Address</label>
										<div class="col-md-4">
											<input type="text" name="address" class="form-control" value="{{$gym->address}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Location</label>
										<div class="col-md-4">
											<input type="text" name="location" class="form-control" value="{{$gym->location}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Phone</label>
										<div class="col-md-4">
											<input type="text" name="phone" class="form-control"  value="{{$gym->number}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email</label>
										<div class="col-md-4">
											<input type="text" name="email" class="form-control" value="{{$gym->email}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Website</label>
										<div class="col-md-4">
											<input type="text" name="website" class="form-control" value="{{$gym->website}}" required="true">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
											<textarea name="d<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-basket font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Add a gym</span>
							</div>
						</div>

						<div class="portlet-body form">
							
							<form method="post" action="/dashboard/gym/update" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="gym_id" value="{{ $gym->id }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" value="{{$gym->name}}" required="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-4">
											<textarea name="description" class="form-control" rows="3"  value=""  required="true">{{$gym->description}}</textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Opening Hours</label>
										<div class="col-md-4">
											<input type="text" name="hours" class="form-control" value="{{$gym->hours}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Membership Price</label>
										<div class="col-md-4">
											<input type="text" name="price" class="form-control" value="{{$gym->price}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Address</label>
										<div class="col-md-4">
											<input type="text" name="address" class="form-control" value="{{$gym->address}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Location</label>
										<div class="col-md-4">
											<input type="text" name="location" class="form-control" value="{{$gym->location}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Phone</label>
										<div class="col-md-4">
											<input type="text" name="phone" class="form-control"  value="{{$gym->number}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email</label>
										<div class="col-md-4">
											<input type="text" name="email" class="form-control" value="{{$gym->email}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Website</label>
										<div class="col-md-4">
											<input type="text" name="website" class="form-control" value="{{$gym->website}}" required="true">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>escription" class="form-control" rows="3"  value=""  required="true">{{$gym->description}}</textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Opening Hours</label>
										<div class="col-md-4">
											<input type="text" name="hours" class="form-control" value="{{$gym->hours}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Membership Price</label>
										<div class="col-md-4">
											<input type="text" name="price" class="form-control" value="{{$gym->price}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Address</label>
										<div class="col-md-4">
											<input type="text" name="address" class="form-control" value="{{$gym->address}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Location</label>
										<div class="col-md-4">
											<input type="text" name="location" class="form-control" value="{{$gym->location}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Phone</label>
										<div class="col-md-4">
											<input type="text" name="phone" class="form-control"  value="{{$gym->number}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email</label>
										<div class="col-md-4">
											<input type="text" name="email" class="form-control" value="{{$gym->email}}" required="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Website</label>
										<div class="col-md-4">
											<input type="text" name="website" class="form-control" value="{{$gym->website}}" required="true">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>