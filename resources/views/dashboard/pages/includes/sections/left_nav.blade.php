<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse" style="margin-top:10px;">

		@if( Auth::user()->role == 1 || Auth::user()->role == 2 )
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start ">
					<a href="/dashboard">
						<i class="fa fa-fw fa-home"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>

				<li>
					<a href="javascript:;">
						<i class="fa fa-fw fa-building"></i>
						<span class="title">Gyms</span>
						<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{ Url('dashboard/gym/create') }}">
							<i class="icon-plus"></i>
							Add new gym</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/gyms/') }}">
							List all</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;">
						<i class="fa fa-fw fa-building"></i>
						<span class="title">Classes</span>
						<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li>
							<a href="{{ Url('/dashboard/class/create') }}">
							<i class="icon-plus"></i>
							Add new class</a>
						</li>
						<li>
							<a href="{{ Url('/dashboard/class/group/create') }}">
							<i class="icon-plus"></i>
							Add class group</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/class/category/create') }}">
							<i class="icon-plus"></i>
							Add class category</a>
						</li>
						<li>
							<a href="{{ Url('/dashboard/class/')}}">
							List all Classes</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/class/groups') }}">
							List all Group</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/class/categorys') }}">
							List all Category</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;">
						<i class="fa fa-fw fa-building"></i>
						<span class="title">Personal Trainer</span>
						<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li>
							<a href="{{ Url('dashboard/trainer/create') }}">
							<i class="icon-plus"></i>
							Add  Trainer</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/trainers') }}">
							<i class="icon-plus"></i>
							Trainers</a>
						</li>
					</ul>
				</li>
			
				<li>
					<a href="javascript:;">
						<i class="fa fa-fw fa-building"></i>
						<span class="title">Venues</span>
						<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li>
							<a href="{{ Url('dashboard/venue/create') }}">
							<i class="icon-plus"></i>
							Add  Venue</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/venues') }}">
							<i class="icon-plus"></i>
							Venues</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
						<i class="fa fa-fw fa-building"></i>
						<span class="title">Store</span>
						<span class="arrow "></span>
					</a>

					<ul class="sub-menu">
						<li>
							<a href="{{ Url('dashboard/store/create') }}">
							<i class="icon-plus"></i>
							Add  Store</a>
						</li>
						<li>
							<a href="{{ Url('dashboard/stores') }}">
							<i class="icon-plus"></i>
							Stores</a>
						</li>
					</ul>
				</li>

				<li class="heading">
	                            		<h3 class="uppercase">Settings</h3>
	                        	</li>
	                        	<li class="start ">
					<a href="{{ Url('dashboard/setting/add/color') }}">
						<i class="fa fa-fw fa-home"></i>
						<span class="title">Add Color</span>
					</a>
				</li>
				<li class="start ">
					<a href="{{ Url('dashboard/admins') }}">
						<i class="fa fa-fw fa-home"></i>
						<span class="title">Admins</span>
					</a>
				</li>
				<li class="start ">
					<a href="{{ Url('dashboard/admin/add') }}">
						<i class="fa fa-fw fa-home"></i>
						<span class="title">Add Admin</span>
					</a>
				</li>
			</ul>
		@endif

		@if( Auth::user()->role == 0 )
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start ">
					<a href="/dashboard">
						<i class="fa fa-fw fa-home"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>		

				<li class="start ">
					<a href="{{ Url('classes') }}">
						<i class="fa fa-fw fa-home"></i>
						<span class="title">Join Class</span>
					</a>
				</li>
			
			</ul>
		@endif

	</div>
</div>