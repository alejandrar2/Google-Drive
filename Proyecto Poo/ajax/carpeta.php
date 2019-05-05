<?php 
	include_once '../class/class-carpeta.php';

	switch ($_GET["accion"]) {
		case 'agregar':

			$carpeta = new Carpeta(null, $_POST["carpeta"], $_POST["usuario"], $_POST["nombre"],"12-10-19");

			$carpeta->agregarCarpeta();

			echo '{"estado": 1, "mensaje":"agregada con exito"}';
		break;
	

		case 'obtener':

			echo Carpeta::obtener($_POST["carpeta"],$_POST["usuario"]);

		break;
	
	}

 ?>