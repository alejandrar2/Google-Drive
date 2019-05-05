<?php

session_start();

include_once '../class/class-carpeta.php';
include_once '../class/class-archivo.php';


echo Archivo::obtenerArchivos("home", 1);




?>