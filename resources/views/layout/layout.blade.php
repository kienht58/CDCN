<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery-2.2.3.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	@yield('css-js')
	@yield('title')
</head>
<body>
	<nav class="navbar navbar-default">
	    <div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="{{route('dashboard.index')}}">CDCN LND</a>
	    	</div>
	    <ul class="nav navbar-nav">
	      	<li class="active"><a href="/">Home</a></li>
	      	<li class="dropdown">
				<a class="dropdown-toggle" id="menu1" data-toggle="dropdown">Categories
				<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				@yield('list-categories')
				</ul>
			</li>
	      	<li><a href="#">FAQs</a></li> 
	    </ul>
	  	</div>
	</nav>
	@yield('content')
</body>
</html>
