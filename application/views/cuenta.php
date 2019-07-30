<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mi cuenta | Agrotracsem</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
<body>
<main>
	<div class="contenedor">
		<div class="card-cuenta">
			<form action="Cuenta/login" method="post">
				<center><h4 class="titulo">Mi cuenta</h4></center><br>
				<label for="">Ingresa tu correo electronico:</label>
				<input type="text" name="mail" class="form-control input" placeholder="agrotracsem@apptracsem.com">
				<br>
				<label for="">Ingresa tu contraseña:</label>
				<input type="password" name="pass" class="form-control input" placeholder="**********">
				<br>
				<button class="btn btn-primary btn-block">Iniciar sesión</button>
			</form><br>
			<center><a href="<?=base_url();?>Cuenta/nuevaCuenta">Crear mi cuenta ahora.</a></center>
		</div>
	</div>
</main>
