@extends('admin.templates.main')

@section('title', 'Crear tags')

@section('errors')

@section('content')


{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}

	<div class="form-group">
		{!!	Form::label('name', 'Nombre') !!}
		{!!	Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required']) !!}
	</div>

	<div class="for">
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

@endsection 