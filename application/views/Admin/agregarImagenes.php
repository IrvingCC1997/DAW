<?php
/*
* Vista Agregar Imagenes 
*
* @author Irving Cruz
* @package views/Admin
*
* @version 1.0.0
* Creado jueves, 01/08/2019
* Ultima modificación de 01/08/2019
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Usuarios | Agrotracsem</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
<body>
<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand">Agrotracsem</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>ProductosAdmin">Productos <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>ImagenesAdmin">Imagenes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>UsuariosAdmin">Usuarios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>ClientesAdmin">Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>ClientesAdmin">Comentarios</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" id="administrar" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> Administrar <i class="fas fa-angle-down"></i></a>
							<div class="dropdown-menu dropdown-primary" aria-labelledby="administrar">
								<a class="nav-link" href="<?=base_url();?>EstadoAdmin">Estado</a>
								<a class="nav-link" href="<?=base_url();?>CiudadAdmin">Ciudad</a>
								<a class="nav-link" href="<?=base_url();?>MetodoPagoA">Método de pago</a>
								<a class="nav-link" href="<?=base_url();?>MetodoEnvioA">Método de envío</a>
							</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"> <?php echo $this->session->userdata('noUsuario'); ?> </i> <i class="fas fa-angle-down"></i></a>
							<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?=base_url();?>UsuariosAdmin/logout">Cerrar Sesión</a>
							</div>
					</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
    <main>
	<div class="contenedorLogin">
		<div class="card-cuenta">
			<form action="<?=base_url();?>ImagenesAdmin/agregarImage" method="post" enctype="multipart/form-data">
				<center><h4 class="titulo">Agregar Imagenes</h4></center><br>
				<label for="primero" id="primerI">Primer imagen:</label>
				<input type="file" name="imagen_1" id="primer" min="0" max="9999" class="form-control input" placeholder="0001"><br>
                
                <label for="segundo" id="segundoI">Secunda imagen:</label>
                <input type="file" name="imagen_2" id="segundo" class="form-control input" placeholder="agrotracsem"><br>
                
                <label for="tercero" id="terceroI">Tercera imagen:</label>
                <input type="file" name="imagen_3" id="tercero" class="form-control input" placeholder="apptracsem"><br>
                
				<br>
            
                <button class="btn btn-primary btn-block" onclick="return validarCuenta();">Agregar imagenes</button>
			</form>
		</div>
	</div>
</main>

	<!-- JQuery -->
	<script type="text/javascript" src="<?=base_url();?>js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/mdb.min.js"></script>
    
    <script>
	function validarCuenta(){
		var primero  = document.getElementById("primer").value;
		var segundo = document.getElementById("segundo").value;
		var tercero = document.getElementById("tercero").value;
        if(primero == ""){
			document.getElementById("primerI").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error"> Campo obligatorio</span>';
			return false;
		}else if(segundo == ""){
			document.getElementById("segundoI").innerHTML = '<i class="fas fa-envelope error"></i> <span class="error">El correo es obligatorio</span>';
			return false;
		}else if(tercero == ""){
			document.getElementById("terceroI").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">La contraseña es obligatoria</span>';
			return false;
		}else{
			return true;
		}
	}
</script>
</body>
</html>