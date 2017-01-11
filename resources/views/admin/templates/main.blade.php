<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'Default') / Panel de Administración</title>
		<link rel="stylesheet" href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }}">
	</head>
	<body>

		<div class="container">
			@include('admin.templates.partials.nav')
			@include('flash::message')
			@include('admin.templates.partials.errors')


			<div class="panel panel-info">
				<div class=panel-heading>
					<h3 class=panel-title>@yield('title')</h3> 
				</div>
			 

				<div class=panel-body>@yield('content')</div>

			</div>
		</div>

		<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }} "></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }} "></script>

	</body>
</html>