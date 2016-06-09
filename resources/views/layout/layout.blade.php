<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <title>@yield('head.title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers"  type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/star-rating.min.css') }}" >
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/carousel.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/select2.min.css') }}">
</head>
<body id="app-layout">
	@include('partials.navbar')
	<div id="content">
        @yield('body.content')
    </div>
	@include('partials.footer')
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/star-rating.min.js') }}"></script>
    @yield('body.script')
</body>
</html>