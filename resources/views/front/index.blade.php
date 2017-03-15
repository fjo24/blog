@extends('admin.templates.main')

@section('title', 'Pagina principal')

@section('content')

<h1>Ingreso de usuario</h1>
<a href="{{ route('admin.auth.login') }}" class="btn btn-success">Entrada al sistema</a>  

<br><br><br>

<div class="row">
    <div class="col-md-8">
        <div class="row">    
            <div class="col-md-6">
                <div class="thumbnail">
              <img src="{{ asset('images/articles/blogdefran_1489521286.jpg') }}" alt="...">
                    <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                                <hr>
                        <i class="fa fa-folder-open-o"></i> <a href="">Category</a>
                        <div class="pull-right">
                            <i class="fa fa-clock-o"></i>Hace 3 minutos
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="thumbnail">
              <img src="{{ asset('images/articles/blogdefran_1489521286.jpg') }}" alt="...">
                    <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                                <hr>
                        <i class="fa fa-folder-open-o"></i> <a href="">Category</a>
                        <div class="pull-right">
                            <i class="fa fa-clock-o"></i>Hace 3 minutos
                        </div>
                    </div>
                </div>
            </div>   
        </div>
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