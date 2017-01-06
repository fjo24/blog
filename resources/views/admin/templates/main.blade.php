<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Default') / Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
@include('admin.templates.partials.nav')
@include('flash::message')

<section>@yield('content')
</section>

<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }} "></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }} "></script>
</body>
</html>