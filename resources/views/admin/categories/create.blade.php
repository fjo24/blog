@extends('admin.templates.main')

@section('title', 'Crear usuario')

@section('errors')
@section('content')


{!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}

	<div class="form-group">
		{!!	Form::label('name', 'Nombre') !!}
		{!!	Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
	</div>

	<div class="for">
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>


{!! Form::close() !!}

@endsection 