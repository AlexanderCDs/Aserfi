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
   </head>
   <body style="background-color: #004B7B">
      <div class="container">
         <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
               <div class="card card-signin my-5">
                  <div class="card-body">
                     <div class="text-center">
                        <img src="{{asset('img/logo_azul.png')}}" class="img-fluid" alt="Responsive image" style="width: 25%">
                        <h1 class="card-title text-center">Aserfi</h1>
                     </div>
                     <form class="form">
                        <div class="mui-textfield mui-textfield--float-label">
                           <input type="email" id="inputEmail" name="inputEmail" required autofocus>
                           <label>Correo Electrónico</label>
                        </div>
                        <div class="mui-textfield mui-textfield--float-label">
                           <input type="password" id="inputPassword" name="inputPassword" required>
                           <label>Contraseña</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: #004B7B">
                          <i class="material-icons" >fingerprint</i> Iniciar sesión
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{asset('js/Page/jquery-3.2.1.min.js')}}"></script>
      <script src="{{asset('css/Page/bootstrap4/popper.js')}}"></script>
      <script src="{{asset('css/Page/bootstrap4/bootstrap.min.js')}}"></script>
      <script src="{{asset('plugins/mui-0.9.41/js/mui.min.js')}}"></script>
   </body>
</html>