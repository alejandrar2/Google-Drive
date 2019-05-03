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
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/googledrive.css">
    <link rel="icon" href="img/Google_Drive_logo.png">
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
            <a href="#" class="buttons first">
                <img src="img/Google_Drive_logo.png" alt="Sorry not found :/" width="40px" heigth="40px"> <p>Drive</p>
            </a>
            <a href="#" class="buttons second">
                <img src="img/captura.png" alt="Sorry not found :/" width="40" height="35"><p>Nuevo</p>
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
      <div class="content_second">
        <input type="text" id="txt-carpeta-actual" class="form-control" 
                value="<?php echo isset($_GET['carpeta'])?$_GET['carpeta']:''; ?>" disabled><br>
            <section>
                <!--Menu-->
                <input type="radio" name="rads2" id="rad1" class="rads" checked="">
                <div class="sects">
                    <br><br>
                    <label>Carpetas</label>
                    <div class="carpetas" id="carpetas">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="googledrive.php?carpeta=nombre">
                                    <p>
                                    <i style="font-size: 40px; padding-right: 10px; color: gray;" class="fas fa-folder folder"></i>
                                    Nombre 
                                    </p>
                                </a>

                            </div>

                            <div class="col-md-3">
                                <p>
                                    <i style="font-size: 40px; padding-right: 10px; color: gray;" class="fas fa-folder folder "></i>
                                    Nombre
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <i style="font-size: 40px; padding-right: 10px; color: gray;" class="fas fa-folder folder "></i>
                                    Nombre
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <i style="font-size: 40px; padding-right: 10px; color: gray;" class="fas fa-folder folder "></i>
                                    Nombre
                                </p>
                            </div>
                        </div>

                        <br><br><br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="    dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nuevo
                            </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <input type="file" class="dropdown-item archivo" name="" >
    <input type="file" class="dropdown-item" name="" > 
   
  </div>
</div>

<button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#exampleModal">
         Carpeta 
    </button>
            
                <!--FIN Menu-->
            </section>
            <section>
                <input type="radio" name="rads2" id="rad2" class="rads">
                <div class="sects">
                    <img src="img/drive_2.PNG" alt="Sorry not found :/">
                </div>
            </section>
            <section>
                <input type="radio" name="rads2" id="rad3" class="rads">
                <div class="sects">
                    <img src="img/drive_3.PNG" alt="Sorry not found :/">
                </div>
            </section>
            <section>
                <input type="radio" name="rads2" id="rad4" class="rads">
                <div class="sects">
                    <img src="img/drive_4.PNG" alt="Sorry not found :/">
                </div>
            </section>
            <section>
                <input type="radio" name="rads2" id="rad5" class="rads">
                <div class="sects">
                    <img src="img/drive_5.PNG" alt="Sorry not found :/">
                </div>
            </section>
            <section>
                <input type="radio" name="rads2" id="rad6" class="rads">
                <div class="sects">
                    <img src="img/drive_6.PNG" alt="Sorry not found :/">
                </div>
            </section>
            <section>
                <input type="radio" name="rads2" id="rad7" class="rads">
                <div class="sects">
                    <img src="img/drive_7.PNG" alt="Sorry not found :/">
                </div>
            </section>
        </div>
    </div>

    <!--MODAL-->





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Carpeta Nueva</label><br>
        <input class="form-control" type="text" name="" id="nombreC" >  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>

    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>