<html lang="es">
 <!DOCTYPE html>
<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield ('title',config('app.name'))</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="e-commerce site well design with responsive view." />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
  <link href="{{ url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700') }}" rel="stylesheet" />
  <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
  <link href="{{ asset('css/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
  <script src="{{ url('https://code.jquery.com/jquery-2.2.4.min.js') }}" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/template_js/jstree.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/template_js/template.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
  @yield('estilo')
  @yield('estilob')
</head>

<body>
  <div class="preloader loader" style="display: block;"> <img src="{{ asset('images/loader.gif') }}" alt="#" /></div>
  <header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="top-left pull-left">
              <div class="language">
                <form action="#" method="post" enctype="multipart/form-data" id="language">
                  <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Español <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Español</a></li>
                      <li><a href="#"> Ingles</a></li>
                      <li><a href="#"> Portugues</a></li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="currency">
                <form action="#" method="post" enctype="multipart/form-data" id="currency">
                  <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>Euro</strong> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Euro</a></li>
                      <li><a href="#">CLP</a></li>
                      <li><a href="#">USD</a></li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="wel-come-msg"> Bienvenidos a nuestra industria</div>
            </div>
            <div class="top-right pull-right">
              <div id="top-links" class="nav pull-right">
                <ul class="list-inline">
                  <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>Mi cuenta</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- Authentication Links -->
                      @guest
                      <li><a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a></li>
                      @if (Route::has('register'))
                      <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
                      @endif
                      @else
<<<<<<< HEAD
                      @if(! auth()->user()->IsClient)
                    <li><a class="nav-link" href="{{url('/admin/dashboard')}}">

                        {{auth()->user()->name }}&nbsp;&nbsp;{{auth()->user()->lastname }}
                    </a>
                       @else
                    <li>
                        <a class="nav-link" href="{{url('/perfil')}}">

                            {{auth()->user()->name }}&nbsp;&nbsp;{{auth()->user()->lastname }}

=======
                      @if(!auth()->user()->admin)
                    <li><a class="nav-link" href="{{url('/perfil')}}">{{ Auth::user()->name}}{{Auth::user()->lastname }}</a>
                       @else
                    <li><a class="nav-link" href="{{url('/admin/dashboard')}}">{{ Auth::user()->name }} {{ Auth::user()->lastname  }}</a>
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
                        @endif
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                          {{ __('Cerrar Sesion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li>
                      @endguest
                    </ul>
                  </li>
                  <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Lista de deseos</span><span> (0)</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="header-inner">
        <div class="col-sm-3 col-xs-3 header-left">
          <div id="logo"> <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="E-Commerce" class="img-responsive" /></a> </div>
        </div>
        <div class="col-sm-9 col-xs-9 header-right">
          @include('includes.buscador')
          @if(Auth::check())
            @include('includes.shopping')
            @endif
          <!--   aqui va el include shopping blade -->
        </div>
      </div>
    </div>
  </header>
  <nav id="menu" class="navbar">
    <div class="nav-inner">
      <div class="navbar-header"><span id="category" class="visible-xs">Categorias</span>
        <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
      </div>
      <div class="navbar-collapse">
        <ul class="main-navigation">
          <li><a href="{{ url('/') }}" class="parent">Inicio</a> </li>
          <li><a href="category.html" class="parent">Quienes somos</a> </li>
          <li><a href="category.html" class="parent">Post Venta</a> </li>
          <li><a href="category.html" class="parent">Servicios</a></li>
          <li class="level-top"><a href="#" class="active parent">Productos</a>
            <ul>
              <li><a href="{{ url('/products') }}">Corchos</a></li>
              <li><a href="cart.html">Maderas</a></li>
              <li><a href="checkout.html">Insumos</a></li>
              <li><a href="blog.html">Blog Page</a></li>
              <li><a href="single-blog.html">Singale Blog Page</a></li>
              <li><a href="register.html">Register Page</a></li>
              <li><a href="contact.html">Contact Page</a></li>
              <li><a href="affiliate.html">Affiliate</a></li>
              <li><a href="forgetpassword.html">Forget Password</a></li>
            </ul>
          </li>
          <li><a href="blog.html" class="parent">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
</body>

</html>
