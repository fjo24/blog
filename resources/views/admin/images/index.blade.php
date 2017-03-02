@extends('admin.templates.main')

@section('title', 'Listado de imagenes')

@section('content')

	<div class="row"> 
		@foreach($images as $image)
			<div class="col-md-4">
				<div class="panel panel-default">
		 						<div class="panel-heading">
		 					 		{{$image->article->title}}
		 						</div>
	  							<div class="panel-body">
									<img src="/images/articles/{{ $image->name }}" class="img-responsive">
		  						</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection