<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Admin Panel</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>	
	@include('admin.template.partials.nav')
	<h3 class"panel-title">@yield('title')</h3>
	<section>
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content')
	</section>

	<script src="{{asset('plugins/jquery/jquery-2.2.4.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>