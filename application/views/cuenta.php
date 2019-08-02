<?php
/*
* Vista Cuenta 
*
* @author Alberto León
* @package application/view
*
* @version 1.0.0
* Creado lunes, 29/07/2019
* Ultima modificación de 31/07/2019
*/
?>
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

				<label for="mail" id="correo">Ingresa tu correo electronico:</label>
				<input type="text" name="mail" id="mail" class="form-control input" placeholder="agrotracsem@apptracsem.com">
				<br>

				<label for="pass" id="contrasena">Ingresa tu contraseña:</label>
				<input type="password" name="pass" id="pass" class="form-control input" placeholder="**********">
				<br>

                <button class="btn btn-primary btn-block" onclick="return validar();">INICIAR SESIÓN</button>

			</form><br>
			<center><a href="<?=base_url();?>Cuenta/nuevaCuenta">Crear mi cuenta ahora.</a></center>
		</div>
	</div>
</main>
<script>
	function validar(){
		var mail = document.getElementById("mail").value;
		var pass = document.getElementById("pass").value;
		if(mail == ""){
			document.getElementById("correo").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">El nombre es obligatorio</span>';
			return false;
		}else if(pass == ""){
			document.getElementById("contrasena").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">La contraseña es obligatoria</span>';
			return false;
		}else if(pass.length < 8){
			document.getElementById("contrasena").innerHTML = '<i class="fas fa-pencil-ruler error"></i> <span class="error">La contraseña debe tener más de 8 caracteres</span>';
			return false;
		}else{
			return true;
		}
	}
</script>

<script type="text/javascript" src="<?=base_url();?>js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/mdb.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/toast.js"></script>
</body>
</html>
