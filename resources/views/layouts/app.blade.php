<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/loginStyle.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/a1379e9a71.js" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <title>Nanotica Agro</title>
  </head>
  <script>
    $(function () {
      $(".open").click(function () {
        $(this).next(".subMenu").toggle(1000);
      });
      $(".productoCamaraUno").click(function () {
        $(".tablaProductoCamaraUno").toggle(1000);
      });
      $(".cultivoCamaraUno").click(function () {
        $(".tablaCultivoCamaraUno").toggle(1000);
      });
      $(".fechasCamaraUno").click(function () {
        $(".tablaFechasCamaraUno").toggle(1000);
      });
      $(".fotosCamaraUno").click(function () {
        $(".tablaFotosCamaraUno").toggle(1000);
      });
      $(".productoCamaraDos").click(function () {
        $(".tablaProductoCamaraDos").toggle(1000);
      });
      $(".cultivoCamaraDos").click(function () {
        $(".tablaCultivoCamaraDos").toggle(1000);
      });
      $(".fechasCamaraDos").click(function () {
        $(".tablaFechasCamaraDos").toggle(1000);
      });
      $(".fotosCamaraDos").click(function () {
        $(".tablaFotosCamaraDos").toggle(1000);
      });
    });
  </script>
  <body>
    <header>
      <div class="container" style="letter-spacing: 1px">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('Nanotica Agro', 'Nanotica Agro') }}
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/home">Sobre Nanotica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resultados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nuestro equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/camaras">Camaras</a>
              </li>
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                </li>
                @endif
              @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->email }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
                </li>
              @endguest
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <section class="banner">
      @yield('content')
    </section>
    <footer class="container-fluid footer">
      <div class="row justify-content-center">
          <div class="col-5 text-center align-items-center">
              <address>
                  <p>Calle Falsa 123 Tel:1234567</p>
              </address>
          </div>
          <div class="col-5 text-center align-items-center">
              <p>Copyright © 1999-2020  S.R.L</p>
          </div>
      </div>
  </footer>
  </body>
</html>
