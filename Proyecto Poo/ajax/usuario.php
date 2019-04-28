<?php
            include("../class/usuarios.php");
            include("../class/persona.php");

            $persona = new Persona(null,$_POST["nombre"],$_POST["apellido"]);
            $persona->agregar();
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
?>