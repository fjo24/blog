@extends('admin.templates.main')

@section('title', 'Crear usuario')

@section('errors')
@section('content')

<section>Categoria creada con exito</section>
<a href="{{ route('admin.categories.create') }}"  class="btn btn-danger">Crear nueva categoria</a>
@endsection