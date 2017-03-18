@extends('admin.templates.main')
@section('title', 'Lista de usuarios')
@section('content')
<a class="btn btn-info btn-xs pull-ri" href="{{ route('admin.users.create')}}">
    Registrar nuevo usuario
</a>
<table class="table table-striped">
    <!-- BUSCADOR DE USUARIOS-->
    <form action="{{ route('admin.users.index') }}" class="navbar-form pull right" method="get">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" id="buscador">
                    <span aria-hidden="true" class="glyphicon glyphicon-search">
                    </span>
                </span>
                <div class="input-group-btn">
                    <input aria-describedby="buscador" class="form-control" name="name" placeholder="Buscar nombre?" type="text">
                        <input aria-describedby="buscador" class="form-control" name="email" placeholder="Buscar correo?" type="text">
                            <input aria-describedby="buscador" class="form-control" name="type" placeholder="Buscar tipo?" type="text">
                                <button class="btn btn-info" type="submit">
                                    Buscar
                                </button>
                            </input>
                        </input>
                    </input>
                </div>
            </div>
        </div>
    </form>
    <!-- FIN BUSCADOR DE USUARIOS-->
    <thead>
        <th>
            ID
        </th>
        <th>
            Nombre
        </th>
        <th>
            Correo
        </th>
        <th>
            Tipo
        </th>
        <th>
            Acción
        </th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                @if($user->type == "admin")
                <span class="label label-danger">
                    {{ $user->type }}
                </span>
                @else
                <span class="label label-primary">
                    {{ $user->type }}
                </span>
                @endif
            </td>
            <td>
                <a class="btn btn-danger glyphicon glyphicon-remove" href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Realmente deseas borrar el usuario?')">
                </a>
                <a class="btn btn-warning glyphicon glyphicon-pencil" href=" {{ route('admin.users.edit', $user->id) }}">
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $users->render() !!}

@endsection
