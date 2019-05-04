<?php
      include("../class/archivo.php");
      include("../class/carpeta.php");


      switch ($_GET["accion"]) {
      	case 'agregar':
      		
      	break;

      	case 'eliminar':
      		
      	break;

      	default:
      		
      		break;
      }

/*
       <?php $formatos = array( "carpeta" => "fas fa-folder folder carpeta"
                                         ".docx" => "fas fa-folder folder carpeta" 
                                         ".pdf" => "fas fa-folder folder carpeta" 
                                         ".xls" => "fas fa-folder folder carpeta" 

                 ); ?>

      $carpeta= Carpeta::obtenerId($_POST["carpeta"])

  $archivo = new archivo(null,$carpeta,$_POST["extencion"],$_POST["nombre"],$_POST["fecha"]);

           $archivo->guardarArchivo();

            echo '{"resultado": "Agregado", "Codigo": 1 }';
*/

?>