<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-3"></div>
				<div class="frm col-5">
					<br><br>
					<img class="gc" src="img/image8.png">
						<p class="text-center"> <?php echo $_GET["correo"] ?> </p>
						<div class="form-group ">
							<label></label>
							<input class="form-control caja " type="email" name="correo" id="correo-inicio"  placeholder="Correo electrónico o telefono">
						</div>
						<div class="form-group ">
							<a class="acolor mv" href="#">¿Olvidaste la contraseña?</a>
							        <div id="respuesta"></div>
									<button  id="btn-contrasenia"class="btn-sg btn-primary mv2">Siguiente</button>
							<br><br>
							
							<div class="row">
								<div class="col">
									
									
								</div>
							</div>
						</div>
				
					
				</div>
				<div class="col-md-3"></div>
			</div></div>

	<footer>
			
		<div class="container">
  			<div class="row justify-content-center">
    		<div class="col-auto centro"></div><select name="idioma"><option value="Español(Latinoamerica)">Español(Latinoamerica)</option></select>
    		<div class="col-auto centro">
    			<a href="#">Ayuda</a>
				<a href="#">Privacidad</a>
				<a href="#">Condiciones</a></div>
    
  </div>
</div>
		
	</footer>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/controlador.js"></script>
 	<script src="js/bootstrap.min.js"></script>
</body>
</html>