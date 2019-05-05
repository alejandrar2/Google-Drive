
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Administrador Google Drive</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/estilos.css" rel="stylesheet">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="#"> Administrador Google Drive</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    
  </nav>

  <div class="nav-scroller bg-white shadow-sm">
  
  </div>

  <main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
      <img class="mr-3" src="" alt="" width="48" height="48">
      <div class="lh-100">
        <h6 class="mb-0 text-white lh-100">Google Drive</h6>
        <small>Administrador</small>
      </div>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
      <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">@username</strong>
          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
      </div>
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">@username</strong>
          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
      </div>
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">@username</strong>
          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
      </div>
      <small class="d-block text-right mt-3">
        <a href="#">All updates</a>
      </small>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
      <h6 class="border-bottom border-gray pb-2 mb-0">Registro de administradores</h6>
      
        <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <div style=" padding: 15px; border: darkcyan solid 1px; border-radius: 10px; padding-top: 40px; padding-bottom: 40px;"  class="row">
        <div class="col-12">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" id="nombre" >
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Apellido" id="apellido" >
              </div>
            </div>
            <br>
            <div class="form-group">
              <input class="form-control"  type="email" name="correo" id="correo" placeholder="Correo" required autofocus >
              <p style="font-size: 13px;"> Puedes usar letras, números y signos de puntuación </p>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Contraseña" id="contra1" required autofocus> 
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Confirmacion" id="contra2" required autofocus> 
                </div>  
              </div>
              <div class="form-group">
                <p style="font-size: 13px;">   Usa 8 o más caracteres con una combinación de letras, números y símbolos</p>
              </div>
              
            </div>
            <br>
            <button id="btn-crearUsr" class="btn btn-primary" style="display: block;float: right;" type="button">Crear Usuario</button>
      
        <br><br>
      </div>
    </div>
    <div class="col-3"></div>
  </div>

      </form>   
   
    </div>
  </main>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>

  
  <script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
</body>
</html>
