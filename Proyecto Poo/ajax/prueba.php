<?php
 include("../class/usuarios.php");

   if(Usuario::validarCorreo("hola.ruby@hotmail.com")){

            echo '{"status":1, "mensaje":"correo"}';
     }else{
            echo '{"status":0, "mensaje":"Fallo"}';
     }
    

      echo"<br>";

    
     if(Usuario::validarContrasenia("rr")){
                  echo '{"status":1, "mensaje":"contra"}';
     }else{
                   echo '{"status":0, "mensaje":"Fallo"}';
          }


?>