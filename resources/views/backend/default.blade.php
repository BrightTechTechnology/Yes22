<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yes22 Backend</title>

    <!-- Global CSS -->
    <link href="{{ asset('/css/global/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/global/general.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/global/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/global/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Global JS -->
    <script src="{{ asset('/js/global/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/global/bootstrap.min.js') }}"></script>


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default pad-md">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('backend/dashboard') }}">Yes22 Backend</a>
			</div>

			@if (Auth::user()->isStaff())
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('backend/dashboard') }}">Dashboard</a></li>
						<li><a href="{{ url('backend/whatsappReminders') }}">Whatsapp reminders</a></li>
						<li><a href="{{ url('backend/connections') }}">Connections</a></li>
						<li><a href="{{ url('backend/operations') }}">Operations</a></li>
						<li><a href="{{ url('backend/clientLists') }}">Client Lists</a></li>
						<li><a href="{{ url('backend/openInvoices') }}">Open Invoices</a></li>
						<li><a href="{{ url('backend/admin') }}">Admins</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			@endif
		</div>
	</nav>

	<?php 
		if (isset($confirmation)) {
			echo'
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-success">
							<div class="panel-heading">
								'.$confirmation.'
							</div>
						</div>
					</div>
				</div>
			';
		}
	?>

	@yield('content')
	<BR><BR><BR>
    <div class="navbar navbar-default navbar-fixed-bottom">
    	<div class="navbar-inner pad-md text-center">
    		<p class="text-muted">{{ date('Y-m-d, H:i:s') }}</p>
    	</div>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    @yield('js-additions')
</body>
</html>
