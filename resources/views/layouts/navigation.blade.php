<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="clear">
							<span class="block m-t-xs">
								<strong class="font-bold">Example user</strong>
							</span> {{-- <span class="text-muted text-xs block">Example menu <b class="caret"></b></span> --}}
						</span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a href="#">Logout</a></li>
					</ul>
				</div>
				<div class="logo-element">
					LYS
				</div>
			</li>
			<li class="{{ isActiveRoute('main') }}">
				<a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
			</li>
			<li class="{{ isActiveRoute('category') }}">
				<a href="{{ url('/category') }}"><i class="fa fa-th"></i> <span class="nav-label">Categories</span></a>
			</li>
			<li class="{{ isActiveRoute('product') }}">
				<a href="{{ url('/product') }}"><i class="fa fa-cubes"></i> <span class="nav-label">Products</span> </a>
			</li>
			<li class="{{ isActiveRoute('messages') }}">
				<a href="{{ url('/messages') }}"><i class="fa fa-envelope"></i> <span class="nav-label">Messages</span> </a>
			</li>
		</ul>

	</div>
</nav>
