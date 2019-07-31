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
	<title>Iniciar Sesión | Agrotracsem</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
<body>
<main>
	<div class="contenedorLogin">
		<div class="card-cuenta">
			<form action="Admin/login" method="post">
				<center><h4 class="titulo">Inicia Sesión</h4></center><br>
				<label for="noUsuario" id="user">Ingresa tu número de usuario:</label>
				<input type="text" name="noUsuario" id="noUsuario" class="form-control input" placeholder="00012">
				<br>
				<label for="pass" id="password">Ingresa tu contraseña:</label>
				<input type="password" name="pass" id="pass" class="form-control input" placeholder="**********">
				<br>
				<button class="btn btn-primary btn-block" onclick="return validarCuenta();">Iniciar sesión</button>
            </form><br>
        </div>
	</div>
</main>
<script>
	function validarCuenta(){
		var noUsuario = document.getElementById("noUsuario").value;
		var pass = document.getElementById("pass").value;
		if(noUsuario == ""){
			document.getElementById("user").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error"> Campo obligatorio</span>';
			return false;
		}else if(pass == ""){
			document.getElementById("password").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error"> Campo obligatorio</span>';
			return false;
		}else if(pass.length < 8){
			document.getElementById("password").innerHTML = '<i class="fas fa-pencil-ruler error"></i> <span class="error">La contraseña debe tener más de 8 caracteres</span>';
			return false;
		}else{
			return true;
		}
	}
</script>