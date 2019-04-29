<?php
      include("../class/archivo.php");
      include("../class/carpeta.php");

      $carpeta= Carpeta::obtenerId($_POST["carpeta"])

  $archivo = new archivo(null,$carpeta,$_POST["extencion"],$_POST["nombre"],$_POST["fecha"]);

           $archivo->guardarArchivo();

            echo '{"resultado": "Agregado", "Codigo": 1 }';
?>