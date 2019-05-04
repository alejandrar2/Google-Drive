<?php 
    if (!isset($_GET["carpeta"])) {
        header("location: googledrive.php?carpeta=home");
    }


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/googledrive.css">
    <link rel="icon" href="img/Google_Drive_logo.png">
    prueba para ver si te aparece el cambio
    <title>Google Drive</title>
    <style>
       @font-face{
           font-family: Open Sans;
           src: url(fonts/open-sans.ttf);
       }
    </style>
</head>
<body>
    <div class="cont-menu">
        <div class="vertical">
            <div class="buttons first">
                <img src="img/Google_Drive_logo.png" width="40px" heigth="40px"> <p>Drive</p>
            </div>
            <a href="#" class="buttons second">
                <img src="img/captura.png" width="40" height="35"><p>Nuevo</p>
            </a>
            <section>
                <label for="rad1"><span><i class="fas fa-laptop-code"></i></span> Mi unidad</label>
                <label for="rad2"><span><i class="fas fa-chalkboard"></i></span> Ordenadores</label>
                <label for="rad3"><span style="padding-right: 13px;"><i class="fas fa-user-friends"></i></span> Compartido conmigo</label>
                <label for="rad4"><span style="padding-right: 20px;"><i class="fas fa-hourglass"></i></span> Reciente</label>
                <label for="rad5"><span><i class="fas fa-star"></i></span> Destacado</label>
                <label for="rad6"><span style="padding-right: 19px;"><i class="far fa-trash-alt"></i></span> Papelera</label>
                <label for="rad7"><span><i class="fas fa-cloud"></i></span> Copias de seguridad</label>
            </section>
        </div>
        <div class="container_first">
            <div class="horizontal">
                <div class="text">
                    <span><i class="fas fa-search"></i></span>
                    <input type="text" name="text" id="search" placeholder="Busqueda en Drive">
                    <span><i class="fas fa-caret-down"></i></span>
                    <div class="drop-down">
                        <a href="#"><span><i class="fas fa-file-alt"></i></span><p>Archivos PDF</p></a>
                        <a href="#"><span><i class="fas fa-file-alt"></i></span><p>Documento de texto</p></a>
                        <a href="#"><span><i class="fas fa-file-alt"></i></span><p>Hoja de Cálculo</p></a>
                        <a href="#"><span><i class="fas fa-film"></i></span><p>Presentaciones</p></a>
                        <a href="#"><span><i class="fas fa-object-group"></i></span><p>Fotos e imágenes</p></a>
                        <a href="#"><span><i class="fas fa-file-video"></i></span><p>Videos</p></a>
                        <a href="#">Otras Herramientas</a>
                    </div>
                </div>  
                <section>
                    <label for="chk"><span><i class="fas fa-question-circle"></i></span></label>
                    <label for="chk"><span><i class="fas fa-cog"></i></span></label>
                    <label for="chk"><span><i class="fas fa-th"></i></i></span></label>
                    <label for="chk"><span><i class="fas fa-bell"></i></span></label>
                    <label for="chk"><span><i class="fas fa-user-circle"></i></span></label>
                </section>
                
      </div>
      <!--FIN Menu-->
    






      <div class=" container-fluid content_second">
        <input type="text" id="carpetaActual" class="form-control" 
                value="<?php echo isset($_GET['carpeta'])?$_GET['carpeta']:''; ?>" disabled><br>

          
                <div class="row" id="carpetas">
                    <div id="mensaje"></div>
                    <!--
                    <div class="col-md-3 carpeta m-2">
                        <a href="index.php?carpeta=nombre"><i class="fas fa-folder tamanio"></i> <span class="nombre">Fotos</span> </a>
                    </div>
                -->
                </div>
       </div>  
       


       <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nombre carpeta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" name="" id="nombreC">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btn-crear" data-dismiss="modal">Crear</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Carpeta
    </button>
   
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>