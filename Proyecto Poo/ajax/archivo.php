<?php
include("../class/class-archivo.php");
include("../class/class-carpeta.php");

switch ($_GET["accion"]) {
     case 'agregar':

      if (isset($_FILES["file"])) {
            $file = $_FILES["file"];
            $nombre = $file["name"];
            $carpeta = "archivos/";
            $ruta = "archivos";
            $ext = substr($file["name"], strrpos($file["name"], '.'));
            $ruta_provisional = $file["tmp_name"];
            $size = $file["size"];
            $src = $carpeta.$nombre;
            move_uploaded_file($ruta_provisional, $src);

            $cod = Carpeta::obtenerId($_GET["carpeta"], $_GET["usuario"]);

            $archivo = new Archivo(null, (int)$cod, (int)$_GET["usuario"], $nombre, $ext, $ruta, "12-4-2019");

            $archivo->guardarArchivo();
            
            $res = array( "nombre" => $nombre, "extencion" => $ext, "ruta" => $ruta );

            echo json_encode($res);


      }else{
            echo '{"estado": 0, "mensaje":"No se pudo subir"}';
      }

     break;

     case 'obtener':
            echo Archivo::obtenerArchivos($_POST["carpeta"],$_POST["usuario"]);
     break;

     default:

     break;
}

?>