<!DOCTYPE html>
<html>
<head>
	<title>{{ $prueba -> title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset ('css/general.css') }}">
</head>
<body>
Probando las rutas y vistas

<h1>{{ $prueba -> title }}</h1>
<hr>
<h2>{{ $prueba -> content }}</h2>
<hr>
Este articulo fue creado por: 
{{ $prueba -> user -> name }}
<hr>
@foreach($prueba->tags as $tag)
{{ $tag -> name }}
@endforeach
</body>
</html>
