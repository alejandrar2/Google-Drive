<?php

session_start();

include_once '../class/class-carpeta.php';
include("../class/usuarios.php");
include("../class/persona.php");


 


echo Usuario::validarContrasenia("asd.456");


?>