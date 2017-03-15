@extends('admin.templates.main')
@section('title')
Pagina de inicio
@endsection
@section('content')
<h1>Entrada al sistema</h1>
<a href="{{ route('admin.auth.login') }}" class="btn btn-success">Entrada al sistema</a>    
@endsection