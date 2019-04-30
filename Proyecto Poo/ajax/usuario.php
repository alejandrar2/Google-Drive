<?php
            include("../class/usuarios.php");
            include("../class/persona.php");

            

            
switch ($_GET["accion"]){

      case 'agregar':
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


      break;

      case 'validarCorreo':
        if(Usuario::validarCorreo( $_POST["correo"]) ){
            echo '{"status":1, "mensaje":" Correo"}';
        }else{
            echo '{"status":0, "mensaje":"Fallo"}';
        }
      break;

      case 'validarContrasenia':
         if(Usuario::validarContrasenia($_POST["contrasenia"]) ){
                  echo '{"status":1, "mensaje":"Exitoso"}';
            }else{
                   echo '{"status":0, "mensaje":"Fallo"}';
            }
      break;
  
      default:
          echo '{"status":0, "mensaje":"Opcion no valida"}';
                
      break;   
    
}
      

     
     
?>