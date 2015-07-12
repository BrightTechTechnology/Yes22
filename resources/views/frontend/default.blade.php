<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title }}</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/general.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/animate.css') }}" rel="stylesheet">

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="/js/ga.js"></script>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	@yield('head-additions')
</head>
<body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '775357492562205',
            xfbml      : true,
            version    : 'v2.4'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

	@if (isset($confirmation))
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						{{ $confirmation }}
					</div>
				</div>
			</div>
		</div>
	@endif

	@if (Session::has('flash_message'))
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-error">
					<div class="panel-heading">
						{{ Session::get('flash_message') }}
					</div>
				</div>
			</div>
		</div>
	@endif

	@yield('content')

	@yield('js-additions')

</body>
</html>
