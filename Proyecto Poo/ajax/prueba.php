<?php

session_start();

include_once '../class/class-carpeta.php';
include_once '../class/class-archivo.php';
include_once '../class/usuarios.php';


$usuarios = json_decode(file_get_contents("../data/usuario.json"),true);
$persona = json_decode(file_get_contents("../data/persona.json"),true);

$res = array();
$c=0;

for ($i=0; $i < count($usuarios) ; $i++) { 

	if ($usuarios[$i]["tipo"]==2  ) {

		

		for ($j=0; $j < count($persona) ; $j++) { 

			if ($usuarios[$i]["codigoUsuario"]==$persona[$j]["codigoPersona"]) {

				$res[$c]["codigoUsuario"] = $usuarios[$i]["codigoUsuario"];
				$res[$c]["correo"] = $usuarios[$i]["correo"];

				$res[$c]["nombre"] = $persona[$j]["nombre"];
				$res[$c]["apellido"] = $persona[$j]["apellido"];

			}

			
		}

		$c++;
	}


	

}

echo json_encode($res);



?>