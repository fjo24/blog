@extends('admin.templates.main')

@section('title', 'Crear articulo')

@section('errors')
@section('content')


{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}

	<div class="form-group"> 
		{!!	Form::label('title', 'Titulo') !!}
		{!!	Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('category_id', 'Categoria') !!}
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoria', 'required']) !!} <!--funcion input de tipo select-->
	</div>

	<div class="form-group">
		{!!Form::label('content', 'Contenido') !!}
		{!!Form::textarea('content', null, ['class'=>'form-control'])!!} 
		<!--CREAMOS UN TEXTAREA. primer parametro es el contenido, luego un valor por defecto que preferimos sea nulo y la clase para darle un orden adecuado-->
	</div>

	<div class="form-group">
		{!!Form::label('image', 'Imagen') !!}
		{!!Form::file('image')!!} 
		<!--CREAMOS UN input tipo file para agregar archivos -->
	</div>

	<div class="form-group">
		{!! Form::label('tags', 'Tag') !!}
		{!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple', 'required']) !!} <!--funcion input de tipo select; tambien se le agregan los dos corchetes al lado de tags para indicar que se esta enviando un arrays o arreglo, es decir varios datos-->
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

@endsection 