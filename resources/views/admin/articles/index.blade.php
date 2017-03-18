@extends('admin.templates.main')

@section('title', 'Listado de articulos')

@section('errors')
@section('content')
<a class="btn btn-danger" href="{{ route('admin.articles.create') }}">
    Crear nuevo articulo
</a>
<table class="table table-striped">
    <thead>
        <th>
            ID
        </th>
        <th>
            Titulo
        </th>
        <th>
            Categoria
        </th>
        <th>
            Usuario
        </th>
        <th>
            Acción
        </th>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>
                {{ $article->id }}
            </td>
            <td>
                {{ $article->title }}
            </td>
            <td>
                {{ $article->category->name }}
            </td>
            <td>
                {{ $article->user->name }}
            </td>
            <td>
                <a class="btn btn-danger glyphicon glyphicon-remove" href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Realmente deseas borrar el articulo?')">
                </a>
                <a class="btn btn-warning glyphicon glyphicon-pencil" href=" {{ route('admin.articles.edit', $article->id) }}">
                </a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<div class="text-center">
    {!! $articles->render() !!}
</div>
@endsection
