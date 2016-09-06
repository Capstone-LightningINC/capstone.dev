
	<div class="navbar-inner">
		<div class="container-fluid" id="navbarCustom">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="index.html"><span>CollegeGo</span></a>

			<!-- start: Header Menu -->


		<!-- start: Header Menu -->
		<div class="nav-no-collapse header-nav">
			<ul class="nav pull-right">
				<!-- start: Message Dropdown -->
				<li class="dropdown hidden-phone">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-envelope"></i>
						<span class="badge red">
							4 </span>
					</a>
					<ul class="dropdown-menu messages">
						<li class="dropdown-menu-title">
							<span>You have 9 messages</span>
							<a href="#refresh"><i class="icon-repeat"></i></a>
						</li>
						<li>
							<a href="#">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="header">
										<span class="from">
									    	Dennis Ji
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
								<span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="header">
										<span class="from">
									    	Dennis Ji
									     </span>
										<span class="time">
									    	56 min
									    </span>
									</span>
								<span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="header">
										<span class="from">
									    	Dennis Ji
									     </span>
										<span class="time">
									    	3 hours
									    </span>
									</span>
								<span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="header">
										<span class="from">
									    	Dennis Ji
									     </span>
										<span class="time">
									    	yesterday
									    </span>
									</span>
								<span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
								<span class="header">
										<span class="from">
									    	Dennis Ji
									     </span>
										<span class="time">
									    	Jul 25, 2012
									    </span>
									</span>
								<span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
							</a>
						</li>
						<li>
							<a class="dropdown-menu-sub-footer">View all messages</a>
						</li>
					</ul>
				</li>

				<!-- start: User Dropdown -->
				<li class="dropdown">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="halflings-icon white user"></i>Hello, User
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown-menu-title">
							<span>Account Settings</span>
						</li>
						<li><a href="{{ action('HomeController@profile') }}"><i class="halflings-icon user"></i> Profile</a></li>
						<li><a href="{{ action('Auth\AuthController@getLogout') }}"><i class="halflings-icon off"></i> Logout</a></li>
					</ul>
				</li>
				<!-- end: User Dropdown -->
			</ul>
		</div>
		<!-- end: Header Menu -->

	</div>
</div>
