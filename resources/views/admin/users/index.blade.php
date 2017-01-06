@extends('admin.templates.main')

@section('title', 'Lista de usuarios')

@section('content')


<table class="table table-striped">
  <thead>
  	<th>ID</th>
  	<th>Nombre</th>
  	<th>Correo</th>
  	<th>Tipo</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	@foreach($users as $user)
  	<tr>
  		
  		<td>{{ $user->id }}</td>	
  		<td>{{ $user->name }}</td>
  		<td>{{ $user->email }}</td>
  		<td>{{ $user->type }}</td>
  		<td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
  	</tr>
  	@endforeach
  </tbody>
</table>



@endsection