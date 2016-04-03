<div class="header-wrapper">
	<header class="header">

		<div class="top">
			<div class="row">
				<div class="medium-2 columns">
					<a href="{{ Url('/') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="LoveFitness Nigeria"></a>
				</div>
				<div class="medium-3 columns medium-text-right">
					<a href="{{ Url('user/register') }}" class="button">Sign up</a>
					<a href="#" class="button secondary">Sign in</a>
				</div>
			</div>	
		</div>

		<nav class="navigation">
			<div class="row">
				<div class="medium-6 columns">
					<ul id="menu-main" class="menu">
						<li><a href="{{ Url('/') }}">Home</a></li>
						<li><a href="{{ Url('/blogs') }}">Blog</a></li>
						<li><a href="{{ Url('/classes') }}">Classes</a></li>
						<li><a href="{{ Url('http://localhost/lovefitness/about/') }}">About</a></li>
						<li><a href="{{ Url('/contact') }}">Contact</a></li>
					</ul>
				</div>				
				<div class="medium-4 columns medium-text-right">
					<div class="search">
						<i class="fa fa-search"></i>
					</div>
				</div>
			</div>
		</nav>
	</header>
</div> 