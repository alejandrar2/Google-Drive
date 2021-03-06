<?php
include("../class/usuarios.php");
include("../class/persona.php");
session_start();
            
switch ($_GET["accion"]){

      case 'agregar':
            $persona = new Persona(null,$_POST["nombre"],$_POST["apellido"]);
            $persona->guardarPersona();
            $ultimo = $persona->obtenerUltimo();

            $usuario = new Usuario( null, (int)$ultimo, $_POST["correo"], $_POST["contra1"], $_POST["contra2"], null );
            $usuario->guardarUsuario();
      
            echo '{"resultado": "Agregado", "Codigo": 1 }';

            $_SESSION["usuario"] = Usuario::obtenerUsuario($_POST["contra1"]);

      break;

      case 'agregarAdministrador':
            $persona = new Persona(null,$_POST["nombre"],$_POST["apellido"]);
            $persona->guardarPersona();
            $ultimo = $persona->obtenerUltimo();

            $usuario = new Usuario( null, $ultimo, $_POST["correo"], $_POST["contra1"], $_POST["contra2"], null );
            $usuario->guardarAdministrador();
      
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
                  $_SESSION["usuario"] = Usuario::obtenerUsuario($_POST["contrasenia"]);
            }else{
                   echo '{"status":0, "mensaje":"Fallo"}';
            }
      break;

      case 'ObtenerAbmin':
        echo Usuario::obtenerAdmin();
      break;

      case 'ObtenerUsr':
        echo Usuario::obtenerUsr();
      break;
  
      case 'validarAdmin':

        if( Usuario::validarAdmin($_POST["correo"], $_POST["contrasenia"]) ) {

          $_SESSION["nombre"] = Usuario::obtenerUsuarioCorreo($_POST["correo"]);

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