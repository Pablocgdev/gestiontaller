<div class ="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">

  </ul>
</div>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    <li><a href="{{ route('admin.auth.login') }}">Login</a></li>
    </ul>
    @if(Auth::user())

      <ul class="nav navbar-nav">
       <li><a href="#">Inicio</a></li>
       <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
       <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
       <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
       <li><a href="{{ route('admin.cars.index') }}">Coches</a></li>
       </ul>

       <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Pagina principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.auth.logout') }}">Salir</a></li>
          </ul>
        </li>
      </ul>

      @endif
    </div><!-- /.navbar-collapse -->
  </div>
</nav>