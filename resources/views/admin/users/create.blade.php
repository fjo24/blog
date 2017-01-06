@extends('admin.templates.main')

@section('title', 'Crear usuario')

@section('content')

{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

	<div class="form-group">
		{!!	Form::label('name', 'Nombre') !!}
		{!!	Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
	</div>

	<div class="form-group">
		{!!	Form::label('email', 'Correo Electronico') !!}
		{!!	Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
	</div>

	<div class="form-group">
		{!!	Form::label('password', 'Contraseña') !!}
		{!!	Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese contraseña', 'required']) !!}
	</div>

	<div class="form-group">
		{!!	Form::label('type', 'Tipo') !!}
		{!!	Form::select('type', ['' => 'Seleccione un nivel de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
	</div>

	<div class="for">
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>


{!! Form::close() !!}

@endsection 