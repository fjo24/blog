@extends('admin.templates.main')

@section('title', 'Listado de articulos')

@section('errors')
@section('content')
<a href="{{ route('admin.articles.create') }}"  class="btn btn-danger">Crear nuevo articulo</a>

	<table class="table table-striped">
	
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>

			<th>Usuario</th>
			<th>Acción</th>


		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{ $article->id }}</td>
				<td>{{ $article->title }}</td>
				<td>{{ $article->category->name }}</td>
				<td>{{ $article->user->name }}</td>
			<td> 
				
				     <a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Realmente deseas borrar el articulo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
      <a href=" {{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a></td>
			</td>
			</tr>
			@endforeach
		</tbody>

	</table>
<div class="text-center"> 
	{!! $articles->render() !!}
</div>

@endsection 