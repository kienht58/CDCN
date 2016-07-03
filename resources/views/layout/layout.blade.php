<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cánh cụt shop</title>
	<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bungee+Shade&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Itim&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Noto+Serif:700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/default.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/component.css') }}" />
	<script src="{{ URL::asset('assets/js/modernizr.custom.js') }}"></script>
</head>

<body>
	@include('partials.navbar')
	<div id="content">
        @yield('body.content')
    </div>
	@include('partials.footer')
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/classie.js') }}"></script>
	<script src="{{ URL::asset('assets/js/cbpViewModeSwitch.js') }}"></script>
</body>
</html>
