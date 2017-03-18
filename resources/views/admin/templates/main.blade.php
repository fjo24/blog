<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Default') / Panel de Administración
        </title>
        <link href="{{ asset ('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset ('plugins/chosen/chosen.css') }}" rel="stylesheet">
                <link href="{{ asset ('plugins/trumbowyg/ui/trumbowyg.min.css') }}" rel="stylesheet">
                </link>
            </link>
        </link>
    </head>
    <body>
        <div class="container">
            @include('admin.templates.partials.nav')
			@include('flash::message')
			@include('admin.templates.partials.errors')
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        @yield('title')
                    </h3>
                </div>
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }} ">
        </script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }} ">
        </script>
        <script src="{{ asset('plugins/chosen/chosen.jquery.js') }} ">
        </script>
        <script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }} ">
        </script>
        @yield('js')
    </body>
</html>