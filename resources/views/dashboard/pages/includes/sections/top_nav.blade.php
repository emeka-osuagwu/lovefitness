<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner ">
		
		<div class="page-logo">
			<a href="{{ Url('/dashboard') }}">
			<img src="{{ asset('../assets/layouts/layout4/img/logo-light.png') }}" alt="logo" class="logo-default" /> </a>
			<div class="menu-toggler sidebar-toggler"></div>
		</div>

		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

		<div class="page-actions">
			<div class="btn-group">
				<button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<span class="hidden-sm hidden-xs">Actions&nbsp;</span>
					<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="javascript:;">
						<i class="icon-docs"></i> New Post </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-tag"></i> New Comment </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-share"></i> Share </a>
					</li>
					<li class="divider"> </li>
					<li>
						<a href="javascript:;">
							<i class="icon-flag"></i> Comments
							<span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="icon-users"></i> Feedbacks
							<span class="badge badge-danger">2</span>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="page-top">
			<form class="search-form" action="page_general_search_2.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
					<span class="input-group-btn">
						<a href="javascript:;" class="btn submit">
							<i class="icon-magnifier"></i>
						</a>
					</span>
				</div>
			</form>

			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					
					<li class="separator hide"> </li>

			<!-- 		<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-bell"></i>
							<span class="badge badge-success"> 7 </span>
						</a>
						
						<ul class="dropdown-menu">
							<li class="external">
								<h3>
									<span class="bold">12 pending</span> notifications
								</h3>
								
								<a href="page_user_profile_1.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
											<span class="time">just now</span>
											<span class="details">
											<span class="label label-sm label-icon label-success">
											<i class="fa fa-plus"></i>
											</span> New user registered. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li> -->

					<li class="separator hide"> </li>

				<!-- 	<li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-envelope-open"></i>
							<span class="badge badge-danger"> 4 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have
								<span class="bold">7 New</span> Messages</h3>
								<a href="app_inbox.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="#">
											<span class="photo">
											<img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
											<span class="subject">
												<span class="from"> Lisa Wong </span>
												<span class="time">Just Now </span>
											</span>
											<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
 -->
					<li class="separator hide"> </li>

					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						
						@if(Auth::user()->status == 0)
							<span class="username username-hide-on-mobile"> {{Auth::user()->email}}</span>
							<img alt="" class="img-circle" src="data:image/png;base64,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" /> </a>
						@endif

						@if(Auth::user()->status == 1)
							<span class="username username-hide-on-mobile"> {{Auth::user()->firstname}}</span>
							<img alt="" class="img-circle" src="{{ Auth::user()->image }}" /> </a>
						@endif

						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="{{ Url('dashboard/user') }}">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="{{ Url('logout') }}">
								<i class="icon-envelope-open"></i> Logout
								<span class="badge badge-danger"> 3 </span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>