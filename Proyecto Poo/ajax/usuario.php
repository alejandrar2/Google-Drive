<?php
            include("../class/usuarios.php");
            include("../class/persona.php");

            $persona = new Persona(null,$_POST["nombre"],$_POST["apellido"]);
            $persona->guardarPersona();
            $ultimo = $persona->obtenerUltimo();

            $usuario = new Usuario(
                  null,
                  $ultimo,
                  $_POST["correo"],
                  $_POST["contra1"],
                  $_POST["contra2"]
                  );

            $usuario->guardarUsuario();

            


            echo '{"resultado": "Agregado", "Codigo": 1 }';

           


      

     
     
?>