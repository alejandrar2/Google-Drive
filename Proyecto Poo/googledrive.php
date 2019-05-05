<?php 
if (!isset($_GET["carpeta"])) {
    header("location: googledrive.php?carpeta=home");
}

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/googledrive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="img/Google_Drive_logo.png">
    <title>Google Drive</title>
    <style>
       @font-face{
           font-family: Open Sans;
           src: url(fonts/open-sans.ttf);
       }
       .google{

        border-radius: 30px;
        background-color: white;
        color: black;
        padding: 10px;
    }
    .subir{
        margin: 0;
        padding: 0;

    }
</style>
</head>
<body>
    <div class="cont-menu">
        <div class="vertical">
            <div class="buttons first">
                <img src="img/Google_Drive_logo.png" width="40px" heigth="40px"> <p>Drive</p>
            </div>
            <div style="margin-left: 20px;" class="dropdown">
                <button class="google" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="padding-right: 8px;" src="img/mas.png"> <span style="padding-right:10px;">Nuevo</span> 
                </button>
                <div class="dropdown-menu" style="min-width: 30rem;" aria-labelledby="dropdownMenuButton">
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                      Crear carpeta
                  </button>
                  <form method="post" id="formulario" enctype="multipart/form-data">
                    <input class="dropdown-item form-control" type="file" name="file">
                </form>
                <a class="dropdown-item" href="#">Subir Archivo</a>
            </div>
        </div>
        <section>
            <a href="googledrive.php"><label for="rad1"><span><i class="fas fa-laptop-code"></i></span> Mi unidad</label></a> 
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
            <input type="hidden" name="" id="usuario" value="<?php echo $_SESSION["usuario"]; ?>">


            <div class="row" id="carpetas">
                <div id="mensaje"></div>
                    <!--
                    <div class="col-md-3 carpeta m-2">
                        <a href="index.php?carpeta=nombre"><i class="fas fa-folder tamanio"></i> <span class="nombre">Fotos</span> </a>
                    </div>
                -->
            </div>
            <br><br>
            <h5>Archivos</h5>
            <div class="row" id="archivos">
<!--
                <div class="col-md-2 p-2 m-4">
                    <div class="card" style="width: 200px;">
                       <img style="width:200px; height: 178px; " src="img/excel.png" class="card-img-top text-center" alt="...">
                       <div class="card-body"style="padding-top: 0px;"><p class="card-text text-center">nombre</p></div>
                   </div> 
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>

</body>
</html>