<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
	<title>Larabook</title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

<body>

	@include('layouts.partials.nav')

	<div class="container">

		@include('flash::message')

		@yield('content')

	</div>

	<script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript">$('#flash-overlay-modal').modal();</script>

</body>

</html>