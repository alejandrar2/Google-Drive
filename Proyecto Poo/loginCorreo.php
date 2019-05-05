<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Bienvenido</title>
	<link rel="icon" type="image/png" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style=" background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;">
	<div id="div-inicial">
	</div>
	<div id="form" >
		<div>
			<h3>
				Iniciar sesion<br>
			</h3>
		</div>

		<div class="form-group" style="margin-top: 50px">
			<input type="email" class="form-control" id="correo"  placeholder="Correo electronico" ><br>
			<input type="password" class="form-control" id="contra" aria-describedby="emailHelp" placeholder="Contraseña"><br>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
				<label class="custom-control-label" for="defaultUnchecked">Recuerdame</label>
			</div>
			<div id="text-help"></div>
		</div>

		<div style="text-align: right; margin-top: 30px; margin-bottom: 40px">
			<a id="abtn-siguiente" ></a>
			<button type="button" class="btn btn-primary" id="btn-siguiente">
				SIGUIENTE 
			</button>

		</div>

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/controlador.js"></script>

</body>
</html>