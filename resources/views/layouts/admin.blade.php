<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Turismo en Lobos') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700|Montserrat:300,400,700" rel="stylesheet" type='text/css'>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/turismolobos.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
  @include('layouts.navbar')
  @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
{{ session('status') }}
    </div>

  @endif
  {{-- @include('admin.partials.nav') --}}

    <div class="container" style="margin-top: 150px;">
      <div class="row">
        <div class="col-md-2">
          <div class="list-group">
            <a href="{{route('admin.evento.index')}}" class="list-group-item">
              Eventos
            </a>
            <a href="{{route('admin.comer.index')}}" class="list-group-item">Gastronomia</a>
            <a href="#" class="list-group-item">Alojamiento</a>
            <a href="#" class="list-group-item">Lugares</a>


          </div>
        </div>
        <div class="col-md-10">
          <div class="panel panel-default">
            {{-- <div class="panel-heading">TurismoCMS</div> --}}
            <div class="panel-body">
              @yield('content')
            </div>
          </div>

        </div>
      </div>
    </div>


        {{-- <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- <div class="admin">
          <div class="container">
            <div class="row">
              <div class="col-md-3 sidebar">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="{{route('admin.evento.list')}}">Eventos</a></li>
                  <li><a href="{{route('admin.evento.add')}}">Crear Evento</a></li>
                  <li><a href="{{route('admin.comer.list')}}">Comer</a></li>
                  <li><a href="{{route('admin.dormir.list')}}">Dormir</a></li>
                </ul>
              </div>
              <div class="col-md-9">
                @yield('content')
              </div>
            </div>
          </div>
        </div> --}}


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
      </script>

</body>
</html>
