<!doctype html>
<html lang="en">

<head>
	<title>Elements | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<!-- <link rel="stylesheet" href="assets/css/demo.css"> -->
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="elements.html" class="active"><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">

				<!-- Elements-->
				<div class="container-fluid">
					<h3 class="page-title">Elements</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- BUTTONS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Buttons</h3>
								</div>
								<div class="panel-body">
									<p class="demo-button">
										<button type="button" class="btn btn-default">Default</button>
										<button type="button" class="btn btn-primary">Primary</button>
										<button type="button" class="btn btn-info">Info</button>
										<button type="button" class="btn btn-success">Success</button>
										<button type="button" class="btn btn-warning">Warning</button>
										<button type="button" class="btn btn-danger">Danger</button>
									</p>
									<br>
									<p class="demo-button">
										<button type="button" class="btn btn-primary btn-lg">Large Size</button>
										<button type="button" class="btn btn-primary">Default Size</button>
										<button type="button" class="btn btn-primary btn-sm">Small Size</button>
										<button type="button" class="btn btn-primary btn-xs">Extra Small Size</button>
									</p>
									<br>
									<p class="demo-button">
										<button type="button" class="btn btn-default"><i class="fa fa-plus-square"></i> Default </button>
										<button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i> Primary</button>
										<button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i> Info</button>
										<button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-refresh fa-spin"></i> Refreshing...</button>
									</p>
									<br>
									<p class="demo-button">
										<button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> Success</button>
										<button type="button" class="btn btn-warning"><i class="fa fa-warning"></i> Warning</button>
										<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Danger</button>
										<button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-spinner fa-spin"></i> Loading...</button>
									</p>
									<br>
									<div class="row">
										<div class="col-md-6">
											<button type="button" class="btn btn-primary btn-block">Button Block</button>
										</div>
										<div class="col-md-6">
											<button type="button" class="btn btn-warning btn-block">Button Block</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END BUTTONS -->
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<input type="text" class="form-control" placeholder="text field">
									<br>
									<input type="password" class="form-control" value="asecret">
									<br>
									<textarea class="form-control" placeholder="textarea" rows="4"></textarea>
									<br>
									<select class="form-control">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 1</span>
									</label>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 2</span>
									</label>
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Fancy Checkbox 3</span>
									</label>
									<br>
									<label class="fancy-radio">
										<input name="gender" value="male" type="radio">
										<span><i></i>Male</span>
									</label>
									<label class="fancy-radio">
										<input name="gender" value="female" type="radio">
										<span><i></i>Female</span>
									</label>
								</div>
							</div>
							<!-- END INPUTS -->
							<!-- INPUT SIZING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Sizing</h3>
								</div>
								<div class="panel-body">
									<input class="form-control input-lg" placeholder=".input-lg" type="text">
									<br>
									<input class="form-control" placeholder="Default input" type="text">
									<br>
									<input class="form-control input-sm" placeholder=".input-sm" type="text">
									<br>
									<select class="form-control input-lg">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<select class="form-control">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<br>
									<select class="form-control input-sm">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
							</div>
							<!-- END INPUT SIZING -->
						</div>
						<div class="col-md-6">
							<!-- LABELS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Labels &amp; Badges</h3>
								</div>
								<div class="panel-body">
									<span class="label label-default">DEFAULT</span>
									<span class="label label-primary">PRIMARY</span>
									<span class="label label-success">SUCCESS</span>
									<span class="label label-info">INFO</span>
									<span class="label label-warning">WARNING</span>
									<span class="label label-danger">DANGER</span>
									<br>
									<br>
									<a href="#">Inbox <span class="badge">42</span></a>
									<br>
									<br>
									<button class="btn btn-primary" type="button">
										Messages <span class="badge">4</span>
									</button>
								</div>
							</div>
							<!-- END LABELS -->
							<!-- PROGRESS BARS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Progress Bars</h3>
								</div>
								<div class="panel-body">
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (success)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (danger)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											75%
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROGRESS BARS -->
							<!-- INPUT GROUPS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Groups</h3>
								</div>
								<div class="panel-body">
									<div class="input-group">
										<input class="form-control" type="text">
										<span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Go!</button>
						</span>
										<input class="form-control" type="text">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Username" type="text">
									</div>
									<br>
									<div class="input-group">
										<input class="form-control" placeholder="Username" type="text">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">$</span>
										<input class="form-control" type="text">
										<span class="input-group-addon">.00</span>
									</div>
								</div>
							</div>
							<!-- END INPUT GROUPS -->
							<!-- ALERT MESSAGES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Alert Messages</h3>
								</div>
								<div class="panel-body">
									<div class="alert alert-info alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-info-circle"></i> The system is running well
									</div>
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> Your settings have been succesfully saved
									</div>
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-warning"></i> Warning, check your permission settings
									</div>
									<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-times-circle"></i> Your account has been suspended
									</div>
								</div>
							</div>
							<!-- END ALERT MESSAGES -->
						</div>
					</div>
				</div>

				<!-- Charts -->
				<div class="container-fluid">
					<h3 class="page-title">Charts</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Line Chart</h3>
								</div>
								<div class="panel-body">
									<div id="demo-line-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Bar Chart</h3>
								</div>
								<div class="panel-body">
									<div id="demo-bar-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Area Chart</h3>
								</div>
								<div class="panel-body">
									<div id="demo-area-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Multiple Chart</h3>
								</div>
								<div class="panel-body">
									<div id="multiple-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Icons -->
				<div class="container-fluid">
					<h3 class="page-title">Icons</h3>
					<div class="panel panel-headline demo-icons">
						<div class="panel-heading">
							<h3 class="panel-title">Linearicons</h3>
							<p class="subtitle">For complete list, please visit <a href="https://linearicons.com/free" target="_blank">https://linearicons.com/free</a></p>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled row">
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-home"></span> <span class="cssclass">lnr lnr-home</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-thumbs-up"></span> <span class="cssclass">lnr lnr-thumbs-up</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-pencil"></span> <span class="cssclass">lnr lnr-pencil</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-magic-wand"></span> <span class="cssclass">lnr lnr-magic-wand</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-drop"></span> <span class="cssclass">lnr lnr-drop</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-lighter"></span> <span class="cssclass">lnr lnr-lighter</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-sun"></span> <span class="cssclass">lnr lnr-sun</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-heart"></span> <span class="cssclass">lnr lnr-heart</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-inbox"></span> <span class="cssclass">lnr lnr-inbox</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-trash"></span> <span class="cssclass">lnr lnr-trash</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-cart"></span> <span class="cssclass">lnr lnr-cart</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-user"></span> <span class="cssclass">lnr lnr-user</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-bookmark"></span> <span class="cssclass">lnr lnr-bookmark</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-map"></span> <span class="cssclass">lnr lnr-map</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-map-marker"></span> <span class="cssclass">lnr lnr-map-marker</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-location"></span> <span class="cssclass">lnr lnr-location</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-rocket"></span> <span class="cssclass">lnr lnr-rocket</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="lnr lnr-download"></span> <span class="cssclass">lnr lnr-download</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-headline demo-icons">
						<div class="panel-heading">
							<h3 class="panel-title">Font Awesome</h3>
							<p class="subtitle">For complete list, please visit <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a></p>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled row">
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-home"></span> <span class="cssclass">fa fa-home</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-download"></span> <span class="cssclass">fa fa-download</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-upload"></span> <span class="cssclass">fa fa-upload</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-shopping-cart"></span> <span class="cssclass">fa fa-shopping-cart</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-calendar"></span> <span class="cssclass">fa fa-calendar</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-map"></span> <span class="cssclass">fa fa-map</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-location"></span> <span class="cssclass">fa fa-location</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-credit-card"></span> <span class="cssclass">fa fa-credit-card</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-database"></span> <span class="cssclass">fa fa-database</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-bell"></span> <span class="cssclass">fa fa-bell</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-envelope"></span> <span class="cssclass">fa fa-envelope</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-thumbs-up"></span> <span class="cssclass">fa fa-thumbs-up</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-line-chart"></span> <span class="cssclass">fa fa-line-chart</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-map-marker"></span> <span class="cssclass">fa fa-map-marker</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-paper-plane-o"></span> <span class="cssclass">fa fa-paper-plane-o</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-search"></span> <span class="cssclass">fa fa-search</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-shopping-bag"></span> <span class="cssclass">fa fa-shopping-bag</span>
								</li>
								<li class="col-md-2 col-sm-4 col-xs-6">
									<span class="fa fa-random"></span> <span class="cssclass">fa fa-random</span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Notifications -->
				<div class="container-fluid">
					<h3 class="page-title">Notifications</h3>
					<div id="toastr-demo" class="panel">
						<div class="panel-body">
							<!-- CONTEXTUAL -->
							<h4>Context</h4>
							<p class="demo-button">
								<button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">General Info</button>
								<button type="button" class="btn btn-success btn-toastr" data-context="success" data-message="This is success info" data-position="top-right">Success Info</button>
								<button type="button" class="btn btn-warning btn-toastr" data-context="warning" data-message="This is warning info" data-position="top-right">Warning Info</button>
								<button type="button" class="btn btn-danger btn-toastr" data-context="error" data-message="This is error info" data-position="top-right">Error Info</button>
							</p>
							<!-- END CONTEXTUAL -->
							<br>
							<!-- POSITION -->
							<h4>Position</h4>
							<p class="demo-button">
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-right">Bottom Right</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-left">Bottom Left</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-left">Top Left</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-right">Top Right</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-full-width">Top Full Width</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-full-width">Bottom Full Width</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-center">Top Center</button>
								<button type="button" class="btn btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-center">Bottom Center</button>
							</p>
							<!-- END POSITION -->
							<br>
							<!-- CALLBACK -->
							<h4>Callback</h4>
							<p class="demo-button">
								<button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback1" data-context="info" data-message="onShown and onHidden callback demo">onShown and onHidden</button>
								<button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback2" data-context="info" data-message="Please click me">onclick</button>
								<button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback3" data-context="info" data-message="Please click close button">onCloseClick</button>
							</p>
							<!-- END CALLBACK -->
						</div>
					</div>
				</div>

				<!-- Panels-->
				<div class="container-fluid">
					<h3 class="page-title">Panels</h3>
					<div class="row">
						<div class="col-md-8">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Panel Headline</h3>
									<p class="panel-subtitle">Panel to display most important information</p>
								</div>
								<div class="panel-body">
									<h4>Panel Content</h4>
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel No Padding</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding bg-primary text-center">
									<div class="padding-top-30 padding-bottom-30">
										<i class="fa fa-thumbs-o-up fa-5x"></i>
										<h3>No Content Padding</h3>
									</div>
								</div>
							</div>
							<!-- END PANEL NO PADDING -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel Default</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div>
							</div>
							<!-- END PANEL DEFAULT -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO CONTROLS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel No Right Controls</h3>
								</div>
								<div class="panel-body">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div>
							</div>
							<!-- END PANEL NO CONTROLS -->
						</div>
						<div class="col-md-4">
							<!-- PANEL WITH FOOTER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel With Footer</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
								</div>
								<div class="panel-footer">
									<h5>Panel Footer</h5>
								</div>
							</div>
							<!-- END PANEL WITH FOOTER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<!-- PANEL SCROLLING -->
							<div id="panel-scrolling-demo" class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel Scrolling</h3>
								</div>
								<div class="panel-body">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div>
							</div>
							<!-- END PANEL SCROLLING -->
						</div>
					</div>
				</div>

				<!-- Tables-->
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-6">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Basic Table</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
						<div class="col-md-6">
							<!-- TABLE NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Table Inside No Padding</h3>
								</div>
								<div class="panel-body no-padding">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE NO PADDING -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Striped Row</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
						<div class="col-md-6">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Hover Row</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Bordered Table</h3>
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
						</div>
						<div class="col-md-6">
							<!-- CONDENSED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Condensed Table</h3>
								</div>
								<div class="panel-body">
									<table class="table table-condensed">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
				</div>

				<!-- Typography-->
				<div class="container-fluid">
					<h3 class="page-title">Typography</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
							<h1>Dashboard Heading 1</h1>
							<h2>Dashboard Heading 2</h2>
							<h3>Dashboard Heading 3</h3>
							<h4>Dashboard Heading 4</h4>
							<h5>Dashboard Heading 5</h5>
							<h6>Dashboard Heading 6</h6>
							<hr>
							<p>Appropriately benchmark web-enabled bandwidth and functionalized leadership skills. Conveniently syndicate global opportunities without interactive methods of empowerment. Collaboratively conceptualize user-centric e-tailers for visionary methodologies. Dramatically myocardinate. Phosfluorescently disintermediate unique resources whereas reliable mindshare. Competently optimize client-focused infrastructures vis-a-vis e-business human capital. Uniquely formulate sustainable benefits whereas functional results. Energistically myocardinate bleeding-edge e-business.</p>
							<hr>
							<p class="text-muted"><code>.text-muted</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-primary"><code>.text-primary</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-success"><code>.text-success</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-info"><code>.text-info</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-warning"><code>.text-warning</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-danger"><code>.text-danger</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<hr>
							<p>Make a paragraph stand out by adding <code>.lead</code></p>
							<p class="lead">Objectively re-engineer maintainable total linkage after proactive intellectual capital. Dynamically evolve best-of-breed e-services for user-centric customer.</p>
							<hr>
							<div class="well">
								<p class="text-left"><code>.text-left</code> Left aligned text.</p>
								<p class="text-center"><code>.text-center</code> Center aligned text.</p>
								<p class="text-right"><code>.text-right</code> Right aligned text.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
