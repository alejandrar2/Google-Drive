<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                <img src="img/captura.png" alt="Sorry not found :/" width="40" height="35">  <p>Nuevo</p>
            </a>
            <section>
                <label for="rad1"><span><i class="fas fa-laptop-code"></i></span> Mi unidad</label>
                <label for="rad2"><span><i class="fas fa-chalkboard"></i></span> Ordenadores</label>
                <label for="rad3"><span style="padding-right: 13px;"><i class="fas fa-user-friends"></i></span> Compartido conmigo</label>
                <label for="rad4"><span style="padding-right: 20px;"><i class="fas fa-hourglass"></i></span> Reciente</label>
                <label for="rad5"><span><i class="fas fa-star"></i></span> Destacado</label>
                <label for="rad6"><span style="padding-right: 19px;"><i class="fas fa-trash"></i></span> Papelera</label>
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
            <section>
                <input type="radio" name="rads2" id="rad1" class="rads" checked="">
                <div class="sects">
                    <img src="img/drive_1.PNG" alt="Sorry not found :/">
                </div>
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
    <script src="Icons/ALL.JS"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>