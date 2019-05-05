<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Crear tu cuente de Google</title>
	<link rel="shorcut icon" href="img/favicon.ico">
</head>
<body>

	<br><br>
	<br><br>
	<br><br>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<div style=" padding: 15px; border: gray solid 1px; border-radius: 10px; padding-top: 40px; padding-bottom: 40px;"  class="row">
				<div class="col-6">
					<img src="img/image8.png">
					<h1 class="lt" >Crear tu cuenta de Google</h1>
					<h2 class="lte" >Ir a Google Drive</h2><br>
					
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" placeholder="Nombre" id="nombre" >
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Apellido" id="apellido" >
						</div>
					</div>
					<br>
					<div class="form-group">
						<input class="form-control"  type="email" name="correo" id="correo" placeholder="Correo" required autofocus >
						<p style="font-size: 13px;"> Puedes usar letras, números y signos de puntuación </p>
						<a class="acolor" style="font-size: 13px;" href=""><b>Usar mi dirección de correo electrónico actual en su lugar</b></a>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Contraseña" id="contra1" required autofocus>	
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Confirmacion" id="contra2" required autofocus>	
							</div>
							
						</div>
						<div class="form-group">
							<p style="font-size: 13px;">   Usa 8 o más caracteres con una combinación de letras, números y símbolos</p>
						</div>
						
					</div>
					<br>
					<a style="font-size: 13px;" class="acolor" href=""><b>Acceder a tu cuenta en su lugar</b> </a>
					<button id="btn-sg" class="btn btn-primary" style="display: block;float: right;" type="button">Siguiente</button>
					
				</div>
				<div class="col-6">
					<br><br>
					<div class="centro">
						<img  src="img/image9.png">
					</div>
					<p class="centro">Una cuenta. Todos los servicios de<br> Google a tu disposición.</p>
					<button id="btn-crear" class="btn btn-primary fb1">Iniciar con Facebook</button><br>
				</div>
				<br><br><br>
			</div>
		</div>
		<div class="col-3"></div>
	</div>
	
</div>
<div class="col-3"></div>


</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/controlador.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>








