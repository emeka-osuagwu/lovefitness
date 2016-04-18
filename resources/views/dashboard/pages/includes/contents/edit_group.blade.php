<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-head">
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-basket font-red-sunglo"></i>
								<span class="caption-subject font-red-sunglo bold uppercase">Edit Group</span>
							</div>
						</div>

						<div class="portlet-body form">
							@if (Session::has('message'))
					  	    	  	<script>
									swal({
										title: "Group updated",
										type: "success",
										confirmButtonColor: "#298829",
										confirmButtonText: "OK",
										closeOnConfirm: false,
										closeOnCancel: false
									},
									function(isConfirm)
									{
										if (isConfirm) {
									  		window.location="/dashboard/class/groups";
									  	}
									});
								</script>
							@endif  
							<form method="post" action="{{ Url('dashboard/class/group/update') }}" enctype="multipart/form-data" class="form-horizontal">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="group_id" value="{{ $group->first()->id }}">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Name</label>
										<div class="col-md-4">
											<input type="text" name="name" class="form-control" required="true" value="{{ $group->first()->name }}">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Categories</label>
										<div class="col-md-4">
											<select class="form-control" name="category_id">
												<option value="{{$group->first()->category->id}}" >{{$group->first()->category->name}}</option>
												@foreach($categories->except($group->first()->category->id) as $category)
													<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-4">
											<textarea name="description" class="form-control" rows="3" required="true">{{$group->first()->description}}</textarea>
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
											<a href="{{ Url('dashboard/class/groups') }}" class="btn default">Cancel</a>
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