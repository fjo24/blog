@extends('admin.templates.main')
@section('title', 'Tags')
@section('content')

<a href="{{ route('admin.tags.create') }}"  class="btn btn-danger">Crear nuevo tag</a>

<!-- BUSCADOR DE TAGS -->
{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
<div class="input-group">
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'buscar tag...', 'aria-describedby' => 'search'])  !!}
  <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>

</div>
{!! Form::close() !!}
<!-- FIN DEL BUSCADOR -->
<hr>

	<table class="table table-striped">
	
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>
			<td>
				
				     <a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Realmente deseas borrar la categoria?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
      <a href=" {{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a></td>
			</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<div class="text-center"> 
	{!! $tags->render() !!}
</div>
@endsection