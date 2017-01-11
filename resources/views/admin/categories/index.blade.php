@extends('admin.templates.main')
@section('title', 'Categorias')
@section('content')

<a href="{{ route('admin.categories.create') }}"  class="btn btn-danger">Crear nueva categoria</a>

	<table class="table table-striped">
	
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
			<td>
				
				     <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Realmente deseas borrar la categoria?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
      <a href=" {{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a></td>
			</td>
			</tr>
			@endforeach
		</tbody>

	</table>

	{!! $categories->render() !!}


@endsection