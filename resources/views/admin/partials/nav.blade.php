<nav class="navbar navbar-admin ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
        {{-- <a class="navbar-brand" href="#">Turismo Lobos</a> --}}
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Web</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Cerrar Sesión
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
          </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li><a href="#">Inicio</a></li>
        <li><a href="{{route('admin.evento.list')}}">Eventos</a></li>
        <li><a href="{{route('admin.comer.list')}}">Comer</a></li>
        <li><a href="{{route('admin.dormir.list')}}">Dormir</a></li>
    </ul>
</div>
