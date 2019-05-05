<!doctype html>
<html lang="es">

<!-- Comienzo del encabezado lo mas general de sitio web -->
  <head>
    <!-- Indicar que se utilizara caracteres especiales en la pagina-->
    <meta charset="utf-8">

    <!-- Indicar que nuestro sitio web esta diseñado para ser visto desde diferentes tamaños de pantalla--> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Descripcion del proyecto y nombre de los autores -->
    <meta name="description" content="Proyecto de Progracion orientada a objetos IS-POO-2018 donde se replicara una pagina para medir nuestras competancias adquiridas en la clase.">
    <meta name="author" content="RonmelLizardo_LuisEstrada">

    <!-- Icono o favicon de el sitio web y nombre de la pagina -->
    <link rel="icon" href="../img/favicon.png">
    <title>Indiegogo IS-POO-2018</title>

  <!-- Importar las librerias de bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Libreria para utilizar font awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

   <!--Css donde se creara los demas atributos que se
    utilizara en el sitio web -->
    <link rel="stylesheet" type="text/css" href="../css/estilosConSASS.css">

  </head>
  <!--Fin del encabezado -->



<!--Inicio del body -->
  <body>

  <!--Inicio de la barra de menu -->
    <?php include("header.html"); ?>

    <main role="main">

        <footer class="container  col-xl-12">

          <!--Formularios -->

        <div class="container log-sign">
          <div class="row">
            <div class="col-xl-4">
              <h2>Empieza rápidamente</h2>
              <p>Activa tu comunidad y descubre lo que tus amigos están financiando.</p>
              <p>No se realizan publicaciones sin tu permiso.</p>
              <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=2392863781&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.8%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.indiegogo.com%252Faccounts%252Fauth%252Ffacebook%252Fcallback%26state%3Dc8aa20d50be735e13bba18a0ec04b283eb59d37f76b57859%26scope%3Demail%252Cuser_friends%252Cpublic_profile%26response_type%3Dcode%26client_id%3D2392863781%26ret%3Dlogin%26logger_id%3D1c82db7a-7226-226e-5a7c-f52ed663d14c&cancel_url=https%3A%2F%2Fwww.indiegogo.com%2Faccounts%2Fauth%2Ffacebook%2Fcallback%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dc8aa20d50be735e13bba18a0ec04b283eb59d37f76b57859%23_%3D_&display=page&locale=es_ES&logger_id=1c82db7a-7226-226e-5a7c-f52ed663d14c" class="btn btn-facebook btn-lg btn-block" >
              REGÍSTRATE CON FACEBOOK </a>
            </div>
            <div class="col-xl-4">
              <h2>Registrarse</h2>
                <div class="form-group">
                  <input type="text" class="form-control" name="txt-nombre-pag" id="txt-nombre-pag" placeholder="Introduzca sus nombre">
                  <div class="invalid-feedback">Campo obligatorio</div>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" id="txt-apellido-pag" name="text-apellido" placeholder="Intruduzca sus apellido">
                  <div class="invalid-feedback">Campo obligatorio</div>
              </div>
              <div class="form-group">
                 <input type="email" class="form-control" id="txt-email-pag"  placeholder="Introduzca su correo electrónico" onkeydown="validarEmail(this);">
                  <div class="invalid-feedback">Email inválido</div>
              </div>
             <div class="form-group">
                 <input type="password" class="form-control" id="txt-password-pag" placeholder="Introduzca su contraseña" onkeydown="validarContrasena(this);">
                 <div class="invalid-feedback">Mínimo 6 carácteres</div>
             </div>
              <div class="form-check">
                  <label class="form-check-label" for="checkNotificar-pag"><input type="checkbox" class="form-check-input" name="checkNotificar" id="checkNotificar">Regístrate en el boletín semanal</label>
              </div>
              <button type="button" id="btn-guardar-pag" onclick="guardarUsuarioPag();" class="btn btn-rosa1 btn-block btn-lg">Crear una cuenta</button>
                    <div class="container-fluid">
                      <div class="row" id="div-respuesta">
                      </div>
                    </div>
            </div>
            <div class="col-xl-4">
              <h2>Iniciar Sesión</h2>    
              <form class="formularios">
                <div class="form-group">
                    <input type="email" class="form-control" id="txt-email-session"  placeholder="Introduzca su correo electrónico" onkeydown="validarEmail(this);" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="txt-password-session" placeholder="Introduzca su contraseña" onkeydown="validarContrasena(this);">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkRecordar">
                    <label class="form-check-label" for="checkRecordar">Recuérdame</label>
                </div>
                <button type="button" onclick="iniciarSesionPag();" class="btn btn-rosa1 btn-lg btn-block">Iniciar Sección</button>
              </form>
            </div>
          </div>
        </div>

        <!--Fin de Formularios -->



       <!-- FOOTER -->
      <?php include 'footer.html'; ?>
        
      <!-- fin del pie de pagina -->
    </main>

    <!--Posterior uso JS, Popper.js y jQuery -->
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!--Controlador para gestionar la pagina-->
    <script type="text/javascript" src="../js/controlador.js"></script>

   


  </body>
</html>