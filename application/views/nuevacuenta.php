<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Crear mi cuenta | Agrotracsem</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
<body>
<main>
	<div class="contenedorCuenta">
		<div class="card-cuenta">
			<form action="registrar" method="post">
				<center><h4 class="titulo">Crear mi cuenta</h4></center><br>
				<label for="nombres" id="name">Ingresa tu nombre:</label>
				<input type="text" name="nombre" id="nombres" class="form-control input" placeholder="agrotracsem"><br>
                
                <label for="apellidos" id="apellido">Ingresa tu apellido:</label>
                <input type="text" name="apellido" id="apellidos" class="form-control input" placeholder="apptracsem"><br>
                
                <label for="correos" id="correo">Ingresa tu correo electrónico:</label>
				<input type="text" name="mail" id="correos" class="form-control input" placeholder="apptracsem"><br>
                
                <label for="contrasenas" id="pass">Ingresa tu contraseña:</label>
				<input type="password" name="pass" id="contrasenas" class="form-control input" placeholder="**********">
				<br>
            
                <button class="btn btn-primary btn-block" onclick="return validarCuenta();">Crear Cuenta</button>
			</form>
		</div>
	</div>
</main>

<script>
	function validarCuenta(){
		var nombre = document.getElementById("nombres").value;
		var apellido = document.getElementById("apellidos").value;
		var correo = document.getElementById("correos").value;
		var pass = document.getElementById("contrasenas").value;
		if(nombre == ""){
			document.getElementById("name").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">El nombre es obligatorio</span>';
			return false;
		}else if(apellido == ""){
			document.getElementById("apellido").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">El apellido es obligatorio</span>';
			return false;
		}else if(correo == ""){
			document.getElementById("correo").innerHTML = '<i class="fas fa-envelope error"></i> <span class="error">El correo es obligatorio</span>';
			return false;
		}else if(pass == ""){
			document.getElementById("pass").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">La contraseña es obligatoria</span>';
			return false;
		}else if(pass.length < 8){
			document.getElementById("pass").innerHTML = '<i class="fas fa-pencil-ruler error"></i> <span class="error">La contraseña debe tener más de 8 caracteres</span>';
			return false;
		}else{
			return true;
		}
	}
</script>