@extends('admin.templates.main')

@section('title', 'Editar articulo - '. $article->name)

@section('errors')
@section('content')


{!! Form::open(['route' => ['admin.articles.update', $article], 'method' => 'PUT', 'files' => true]) !!}

	<div class="form-group"> 
		{!!	Form::label('title', 'Titulo') !!}
		{!!	Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Nombre del articulo', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('category_id', 'Categoria') !!}
		{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category', 'required']) !!} <!--funcion input de tipo select-->
	</div>

	<div class="form-group">
		{!!Form::label('content', 'Contenido') !!}
		{!!Form::textarea('content', $article->content, ['class'=>'form-control textarea-content'])!!} 
		<!--CREAMOS UN TEXTAREA. primer parametro es el contenido, luego un valor por defecto que preferimos sea nulo y la clase para darle un orden adecuado-->
	</div>


	<div class="form-group">
		{!! Form::label('tags', 'Tag') !!}
		{!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!} <!--funcion input de tipo select; tambien se le agregan los dos corchetes al lado de tags para indicar que se esta enviando un arrays o arreglo, es decir varios datos-->
	</div>

	<div class="form-group">
		{!! Form::submit('Actualizar', ['class'=> 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

@endsection 

@section('js')

	<script> 
			$('.select-tag').chosen({
				placeholder_text_multiple:"Seleccione un maximo de 3 tags",
				max_selected_options	: 3,
				no_results_text			: "TAG NO ENCONTRADO"
							});
			$('.select-category').chosen({
				placeholder_text_single:"Seleccione una categoria"
							});

			//plugin trumbowig
			$('.textarea-content').trumbowyg();


	</script>

@endsection