<?php
            include("../class/class-usuario.php");
            include("../class/class-persona.php");

            if (Usuario::validarContra($_POST["cantra2"],$_POST["cantra1"])) {

            	$persona = new Persona();
            	$persona->agregar(null,$_POST["nombre"],$_POST["apellido"]);
            	$ultimo = Persona->obtenerUltimo();

            	$usuario = new Usuario(
            	 	null,
            	 	$ultimo,
            	 	$_POST["correo1"],
            	 	$_POST["correo2"],
            	 	$_POST["contra1"],
            	 	$_POST["contra2"]
            	);

            	$usuario->agregar();

            	echo '{"resultado": "Agregado", "Codigo": 1 }';

            } else {
            	echo '{"resultado": "Contraseñas Diferentes", "Codigo": 0 }';
            }
            
            echo Usuario::obtenerpersonas();

        default:
            echo '{"status":0,"mensaje":"Acción no válida"}';
    }

?>