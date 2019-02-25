<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Aserfi CPanel</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="{{asset('img/logo_azul.png')}}">
    <meta name="msapplication-TileColor" content="#3372DF">

    <meta name="description" content="Somos una firma de profesionales especializados en el sector financiero, nuestro modelo de negocios se basa en capitalizar la competencia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posibles.">
    <meta name="author" content="Arthur CD & Cindy CV">
    <meta name="keywords" content="Aserfi">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('img/logo_azul.png')}}">

    <link href="{{asset('css/Page/bootstrap4/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{asset('plugins/mui-0.9.41/css/mui.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/Dashboard/material.cyan-light_blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Dashboard/styles.css')}}">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>

    <!-- Para incrustar css adicional -->
    @yield('CSSGenerico')

  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      

      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="{{asset('img/logo.png')}}" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">
                <i class="material-icons">settings</i> Configuración
              </li>
              <li class="mdl-menu__item">
                <i class="material-icons">power_settings_new</i> Cerrar sesión
              </li>
              <!--<li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>-->
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <!--<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i> Inicio
          </a>
          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i> Modulos
          </a>
          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i> Permisos
          </a>-->
          <a class="mdl-navigation__link" href="/Usuarios">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i> Usuarios
          </a>
          <a class="mdl-navigation__link" href="/Carrusel">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">view_carousel</i> Carrusel
          </a>
          <a class="mdl-navigation__link" href="/QuienesSomos">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i> Quiénes somos
          </a>
          <a class="mdl-navigation__link" href="/Servicios">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">room_service</i> Servicios
          </a>
          <a class="mdl-navigation__link" href="/Beneficios">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">trending_up</i> Beneficios
          </a>
          <a class="mdl-navigation__link" href="/Contacto">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i> Contacto
          </a>
          <div class="mdl-layout-spacer"></div>
          <!--<a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span>
          </a>-->
        </nav>
      </div>

      <!-- Contenido de la sección -->
      @yield('Contenido')
      
    </div>

    <script src="{{asset('js/Page/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('css/Page/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('css/Page/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/mui-0.9.41/js/mui.min.js')}}"></script>
    <script src="{{asset('js/Dashboard/material.min.js')}}"></script>
    <!-- Para incrustar js adicional -->
    @yield('JSGenerico')
  </body>
</html>
