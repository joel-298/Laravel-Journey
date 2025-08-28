<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | @yield('title', __('app.dashboard_title'))</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
	@stack('styles')
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<!-- header navbar -->
	<header class="main-header">
		<!-- Logo -->
		<a href="{{ route('home') }}" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>A</b>LT</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>Admin</b>LTE</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<li class="dropdown messages-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-envelope-o"></i>
				<span class="label label-success">4</span>
				</a>
				<ul class="dropdown-menu">
				<li class="header">You have 4 messages</li>
				<li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu">
					<li><!-- start message -->
						<a href="#">
						<div class="pull-left">
							<img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
						</div>
						<h4>
							Support Team
							<small><i class="fa fa-clock-o"></i> 5 mins</small>
						</h4>
						<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<!-- end message -->
					<li>
						<a href="#">
						<div class="pull-left">
							<img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
						</div>
						<h4>
							AdminLTE Design Team
							<small><i class="fa fa-clock-o"></i> 2 hours</small>
						</h4>
						<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="pull-left">
							<img src="{{ asset('dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
						</div>
						<h4>
							Developers
							<small><i class="fa fa-clock-o"></i> Today</small>
						</h4>
						<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="pull-left">
							<img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
						</div>
						<h4>
							Sales Department
							<small><i class="fa fa-clock-o"></i> Yesterday</small>
						</h4>
						<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="pull-left">
							<img src="{{ asset('dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
						</div>
						<h4>
							Reviewers
							<small><i class="fa fa-clock-o"></i> 2 days</small>
						</h4>
						<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					</ul>
				</li>
				<li class="footer"><a href="#">See All Messages</a></li>
				</ul>
			</li>
			<!-- Notifications: style can be found in dropdown.less -->
			<li class="dropdown notifications-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-bell-o"></i>
				<span class="label label-warning">10</span>
				</a>
				<ul class="dropdown-menu">
				<li class="header">You have 10 notifications</li>
				<li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu">
					<li>
						<a href="#">
						<i class="fa fa-users text-aqua"></i> 5 new members joined today
						</a>
					</li>
					<li>
						<a href="#">
						<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
						page and may cause design problems
						</a>
					</li>
					<li>
						<a href="#">
						<i class="fa fa-users text-red"></i> 5 new members joined
						</a>
					</li>

					<li>
						<a href="#">
						<i class="fa fa-shopping-cart text-green"></i> 25 sales made
						</a>
					</li>
					<li>
						<a href="#">
						<i class="fa fa-user text-red"></i> You changed your username
						</a>
					</li>
					</ul>
				</li>
				<li class="footer"><a href="#">View all</a></li>
				</ul>
			</li>
			<!-- Tasks: style can be found in dropdown.less -->
			<li class="dropdown tasks-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-flag-o"></i>
				<span class="label label-danger">9</span>
				</a>
				<ul class="dropdown-menu">
				<li class="header">You have 9 tasks</li>
				<li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu">
					<li><!-- Task item -->
						<a href="#">
						<h3>
							Design some buttons
							<small class="pull-right">20%</small>
						</h3>
						<div class="progress xs">
							<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
								aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
							<span class="sr-only">20% Complete</span>
							</div>
						</div>
						</a>
					</li>
					<!-- end task item -->
					<li><!-- Task item -->
						<a href="#">
						<h3>
							Create a nice theme
							<small class="pull-right">40%</small>
						</h3>
						<div class="progress xs">
							<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
								aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
							<span class="sr-only">40% Complete</span>
							</div>
						</div>
						</a>
					</li>
					<!-- end task item -->
					<li><!-- Task item -->
						<a href="#">
						<h3>
							Some task I need to do
							<small class="pull-right">60%</small>
						</h3>
						<div class="progress xs">
							<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
								aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						</a>
					</li>
					<!-- end task item -->
					<li><!-- Task item -->
						<a href="#">
						<h3>
							Make beautiful transitions
							<small class="pull-right">80%</small>
						</h3>
						<div class="progress xs">
							<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
								aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
							<span class="sr-only">80% Complete</span>
							</div>
						</div>
						</a>
					</li>
					<!-- end task item -->
					</ul>
				</li>
				<li class="footer">
					<a href="#">View all tasks</a>
				</li>
				</ul>
			</li>
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
				<span class="hidden-xs">Alexander Pierce</span>
				</a>
				<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header">
					<img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

					<p>
					Alexander Pierce - Web Developer
					<small>Member since Nov. 2012</small>
					</p>
				</li>
				<!-- Menu Body -->
				<li class="user-body">
					<div class="row">
					<div class="col-xs-4 text-center">
						<a href="#">Followers</a>
					</div>
					<div class="col-xs-4 text-center">
						<a href="#">Sales</a>
					</div>
					<div class="col-xs-4 text-center">
						<a href="#">Friends</a>
					</div>
					</div>
					<!-- /.row -->
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="pull-left">
					<a href="#" class="btn btn-default btn-flat">Profile</a>
					</div>
					<div class="pull-right">
					<a href="#" class="btn btn-default btn-flat">Sign out</a>
					</div>
				</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
			<li>
				<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
			</li>
			</ul>
		</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
			<img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
			<p>Alexander Pierce</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview {{ request()->routeIs('home') || request()->routeIs('index') || request()->routeIs('index') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
				<li class="{{ request()->routeIs('index2') ? 'active' : '' }}"><a href="{{ route('index2') }}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
			</ul>
			</li>
			<li class="treeview {{ request()->routeIs('pages.layout.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-files-o"></i>
				<span>Layout Options</span>
				<span class="pull-right-container">
				<span class="label label-primary pull-right">4</span>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.layout.top-nav') ? 'active' : '' }}"><a href="{{ route('pages.layout.top-nav') }}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
				<li class="{{ request()->routeIs('pages.layout.boxed') ? 'active' : '' }}"><a href="{{ route('pages.layout.boxed') }}"><i class="fa fa-circle-o"></i> Boxed</a></li>
				<li class="{{ request()->routeIs('pages.layout.fixed') ? 'active' : '' }}"><a href="{{ route('pages.layout.fixed') }}"><i class="fa fa-circle-o"></i> Fixed</a></li>
				<li class="{{ request()->routeIs('pages.layout.collapsed-sidebar') ? 'active' : '' }}"><a href="{{ route('pages.layout.collapsed-sidebar') }}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
			</ul>
			</li>
			<li class="{{ request()->routeIs('pages.widgets') ? 'active' : '' }}">
			<a href="{{ route('pages.widgets') }}">
				<i class="fa fa-th"></i> <span>Widgets</span>
				<span class="pull-right-container">
				<small class="label pull-right bg-green">new</small>
				</span>
			</a>
			</li>
			<li class="treeview {{ request()->routeIs('pages.charts.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-pie-chart"></i>
				<span>Charts</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.charts.chartjs') ? 'active' : '' }}"><a href="{{ route('pages.charts.chartjs') }}"><i class="fa fa-circle-o"></i> ChartJS</a></li>
				<li class="{{ request()->routeIs('pages.charts.morris') ? 'active' : '' }}"><a href="{{ route('pages.charts.morris') }}"><i class="fa fa-circle-o"></i> Morris</a></li>
				<li class="{{ request()->routeIs('pages.charts.flot') ? 'active' : '' }}"><a href="{{ route('pages.charts.flot') }}"><i class="fa fa-circle-o"></i> Flot</a></li>
				<li class="{{ request()->routeIs('pages.charts.inline') ? 'active' : '' }}"><a href="{{ route('pages.charts.inline') }}"><i class="fa fa-circle-o"></i> Inline charts</a></li>
			</ul>
			</li>
			<li class="treeview {{ request()->routeIs('pages.ui.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-laptop"></i>
				<span>UI Elements</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.ui.general') ? 'active' : '' }}"><a href="{{ route('pages.ui.general') }}"><i class="fa fa-circle-o"></i> General</a></li>
				<li class="{{ request()->routeIs('pages.ui.icons') ? 'active' : '' }}"><a href="{{ route('pages.ui.icons') }}"><i class="fa fa-circle-o"></i> Icons</a></li>
				<li class="{{ request()->routeIs('pages.ui.buttons') ? 'active' : '' }}"><a href="{{ route('pages.ui.buttons') }}"><i class="fa fa-circle-o"></i> Buttons</a></li>
				<li class="{{ request()->routeIs('pages.ui.sliders') ? 'active' : '' }}"><a href="{{ route('pages.ui.sliders') }}"><i class="fa fa-circle-o"></i> Sliders</a></li>
				<li class="{{ request()->routeIs('pages.ui.timeline') ? 'active' : '' }}"><a href="{{ route('pages.ui.timeline') }}"><i class="fa fa-circle-o"></i> Timeline</a></li>
				<li class="{{ request()->routeIs('pages.ui.modals') ? 'active' : '' }}"><a href="{{ route('pages.ui.modals') }}"><i class="fa fa-circle-o"></i> Modals</a></li>
			</ul>
			</li>
			<li class="treeview {{ request()->routeIs('pages.forms.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-edit"></i> <span>Forms</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.forms.general') ? 'active' : '' }}"><a href="{{ route('pages.forms.general') }}"><i class="fa fa-circle-o"></i> General Elements</a></li>
				<li class="{{ request()->routeIs('pages.forms.advanced') ? 'active' : '' }}"><a href="{{ route('pages.forms.advanced') }}"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
				<li class="{{ request()->routeIs('pages.forms.editors') ? 'active' : '' }}"><a href="{{ route('pages.forms.editors') }}"><i class="fa fa-circle-o"></i> Editors</a></li>
			</ul>
			</li>
			<li class="treeview {{ request()->routeIs('pages.tables.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-table"></i> <span>Tables</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.tables.simple') ? 'active' : '' }}"><a href="{{ route('pages.tables.simple') }}"><i class="fa fa-circle-o"></i> Simple tables</a></li>
				<li class="{{ request()->routeIs('pages.tables.data') ? 'active' : '' }}"><a href="{{ route('pages.tables.data') }}"><i class="fa fa-circle-o"></i> Data tables</a></li>
			</ul>
			</li>
			<li class="{{ request()->routeIs('pages.calendar') ? 'active' : '' }}">
			<a href="{{ route('pages.calendar') }}">
				<i class="fa fa-calendar"></i> <span>Calendar</span>
				<span class="pull-right-container">
				<small class="label pull-right bg-red">3</small>
				<small class="label pull-right bg-blue">17</small>
				</span>
			</a>
			</li>
			<li class="treeview {{ request()->routeIs('pages.mailbox.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-envelope"></i> <span>Mailbox</span>
				<span class="pull-right-container">
				<small class="label pull-right bg-yellow">12</small>
				<small class="label pull-right bg-green">16</small>
				<small class="label pull-right bg-red">5</small>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.mailbox.mailbox') ? 'active' : '' }}"><a href="{{ route('pages.mailbox.mailbox') }}"><i class="fa fa-circle-o"></i> Inbox</a></li>
				<li class="{{ request()->routeIs('pages.mailbox.compose') ? 'active' : '' }}"><a href="{{ route('pages.mailbox.compose') }}"><i class="fa fa-circle-o"></i> Compose</a></li>
				<li class="{{ request()->routeIs('pages.mailbox.read-mail') ? 'active' : '' }}"><a href="{{ route('pages.mailbox.read-mail') }}"><i class="fa fa-circle-o"></i> Read</a></li>
			</ul>
			</li>
			<li class="treeview {{ request()->routeIs('pages.examples.*') ? 'active' : '' }}">
			<a href="#">
				<i class="fa fa-folder"></i> <span>Examples</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ request()->routeIs('pages.examples.invoice') ? 'active' : '' }}"><a href="{{ route('pages.examples.invoice') }}"><i class="fa fa-circle-o"></i> Invoice</a></li>
				<li class="{{ request()->routeIs('pages.examples.profile') ? 'active' : '' }}"><a href="{{ route('pages.examples.profile') }}"><i class="fa fa-circle-o"></i> Profile</a></li>
				<li class="{{ request()->routeIs('pages.examples.login') ? 'active' : '' }}"><a href="{{ route('pages.examples.login') }}"><i class="fa fa-circle-o"></i> Login</a></li>
				<li class="{{ request()->routeIs('pages.examples.register') ? 'active' : '' }}"><a href="{{ route('pages.examples.register') }}"><i class="fa fa-circle-o"></i> Register</a></li>
				<li class="{{ request()->routeIs('pages.examples.lockscreen') ? 'active' : '' }}"><a href="{{ route('pages.examples.lockscreen') }}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
				<li class="{{ request()->routeIs('pages.examples.404') ? 'active' : '' }}"><a href="{{ route('pages.examples.404') }}"><i class="fa fa-circle-o"></i> 404 Error</a></li>
				<li class="{{ request()->routeIs('pages.examples.500') ? 'active' : '' }}"><a href="{{ route('pages.examples.500') }}"><i class="fa fa-circle-o"></i> 500 Error</a></li>
				<li class="{{ request()->routeIs('pages.examples.blank') ? 'active' : '' }}"><a href="{{ route('pages.examples.blank') }}"><i class="fa fa-circle-o"></i> Blank Page</a></li>
				<li class="{{ request()->routeIs('pages.examples.pace') ? 'active' : '' }}"><a href="{{ route('pages.examples.pace') }}"><i class="fa fa-circle-o"></i> Pace Page</a></li>
			</ul>
			</li>
			<li class="treeview">
			<a href="#">
				<i class="fa fa-share"></i> <span>Multilevel</span>
				<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
				<li class="treeview">
				<a href="#"><i class="fa fa-circle-o"></i> Level One
					<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
					<li class="treeview">
					<a href="#"><i class="fa fa-circle-o"></i> Level Two
						<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
					</ul>
					</li>
				</ul>
				</li>
				<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
			</ul>
			</li>
			<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
			<li class="header">LABELS</li>
			<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
			<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
			<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	@yield('content')

	<footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </footer>

	<div class="control-sidebar-bg"></div>
</div>

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
@stack('scripts')
</body>
</html>


