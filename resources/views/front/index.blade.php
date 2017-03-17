@extends('admin.templates.main')

@section('title', 'Pagina principal')

@section('content')

<h1>Ingreso de usuario</h1>
<a href="{{ route('admin.auth.login') }}" class="btn btn-success">Entrada al sistema</a>  

<br><br><br>

<div class="row">
    <div class="col-md-8">
        <div class="row">    
            
        @foreach($articles as $article)
            <div class="col-md-6">
                <div class="thumbnail">
                @foreach($article->images as $image)
              <img src="{{ asset('images/articles/' . $image->name) }}" alt="...">
                @endforeach
                    <div class="caption">
                            <h3>{{ $article->title }}</h3>
                            <p>{!! $article->content !!}</p>
                                <hr>
                        <i class="fa fa-folder-open-o"></i> <a href="">{{ $article->category->name }}</a>
                        <div class="pull-right">
                            <i class="fa fa-clock-o"></i>Hace 3 minutos
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
                        <div class="text-center">{!! $articles->render() !!}</div>

    </div>




    <div class="row">    
        <div class="col-md-4">
                     <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                      </div>
                      <div class="panel-body">
                        Panel content
                      </div>
                    </div>
        </div>
    </div>


                
</div>

@endsection