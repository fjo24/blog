@extends('admin.templates.main')
@section('title', 'Lista de usuarios')
@section('content')

<a href="{{ route('admin.users.create')}}" class="btn btn-info btn-xs pull-ri">Registrar nuevo usuario</a>
<table class="table table-striped">
<!-- BUSCADOR DE USUARIOS-->
<form class="navbar-form pull right" action="{{ route('admin.users.index') }}" method="get">
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" id="buscador"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
      <div class="input-group-btn">
        <input class="form-control" type="text" name="name" placeholder="Buscar nombre?" aria-describedby="buscador">
        <input class="form-control" type="text" name="email" placeholder="Buscar correo?" aria-describedby="buscador">
        <input class="form-control" type="text" name="type" placeholder="Buscar tipo?" aria-describedby="buscador">
        <button type="submit" class="btn btn-info">Buscar</button>
      </div>
    </div>
  </div>
</form>
<!-- FIN BUSCADOR DE USUARIOS-->

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
  		<td>
  		@if($user->type == "admin")
  		<span class="label label-danger">{{ $user->type }}</span>
  		@else
  		<span class="label label-primary">{{ $user->type }}</span>
  		@endif
  		</td>
  		<td>
      <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Realmente deseas borrar el usuario?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
      <a href=" {{ route('admin.users.edit', $user->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a></td>
  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $users->render() !!}

@endsection