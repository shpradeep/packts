<html>
	<head>
	<title>Packts...
	</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('public/css/custom.css') }}">
	</head>
	<body>
	<div class="header">
		@section('header')
		<nav class="navbar navbar-expand-sm bg-light navbar-light">
		  <ul class="navbar-nav">
			<li class="nav-item active" style="float:right">
			  <a class="nav-link" href="{{ route('welcome')  }}">My Packts</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="products">Product List</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="login">Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="create">Create Account</a>
			</li>
		  </ul>
		</nav>
		@show
	</div>
	<div class="content">
		@section('content')
		@show
	</div>
	<div class="footer">
		@section('footer')
		<h1 style="margin-left:1%;">Packts</h1>
		@show
	</div>
	<!--<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#">Page 1</a></li>
			  <li><a href="#">Page 2</a></li>
			  <li><a href="#">Page 3</a></li>
			</ul>
		  </div>
		</nav>
	</body>-->
	</body>
</html>