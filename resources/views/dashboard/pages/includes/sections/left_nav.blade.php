<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse" style="margin-top:10px;">
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
						<a href="/gym/create">
						<i class="icon-plus"></i>
						Add new gym</a>
					</li>
					<li>
						<a href="/gyms/">
						<i class="icon-list"></i><span class="badge badge-info">3</span>
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
						<a href="/class/create">
						<i class="icon-plus"></i>
						Add new class</a>
					</li>
					<li>
						<a href="{{ Url('/dashboard/class/group') }}">
						<i class="icon-plus"></i>
						Add class group</a>
					</li>
					<li>
						<a href="{{ Url('dashboard/class/category') }}">
						<i class="icon-plus"></i>
						Add class category</a>
					</li>
					<li>
						<a href="/dashboard/class/">
						<i class="icon-list"></i><span class="badge badge-info">3</span>
						List all Classes</a>
					</li>
					<li>
						<a href="{{ Url('dashboard/class/groups') }}">
						<i class="icon-list"></i><span class="badge badge-info">3</span>
						List all Group</a>
					</li>
					<li>
						<a href="{{ Url('dashboard/class/categorys') }}">
						<i class="icon-list"></i><span class="badge badge-info">3</span>
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
		
		</ul>
	</div>
</div>