<?php
/*
* Vista Metodo de pago 
*
* @author Joana Dominguez
* @package application/views
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Método de pago | Agrotracsem</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Se utiliza la función que ya esta precargada para utilizar archivos CSS -->
	<?php foreach($css_files as $file): ?>
		<link rel="stylesheet" href="<?=$file;?>">
	<?php endforeach; ?>
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
						<a class="nav-link" href="<?=base_url();?>Contacto/comentarios">Comentarios</a>
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
								<a class="dropdown-item" href="<?=base_url();?>Admin/logout">Cerrar Sesión</a>
							</div>
					</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Se imprime todo el contenido que tiene la variable -->
	<?=$output;?>

	<?php foreach($js_files as $files): ?>
		<script src="<?=$files?>"></script>
	<?php endforeach; ?>

	<!-- JQuery -->
	<script type="text/javascript" src="<?=base_url();?>js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/mdb.min.js"></script>
    
</body>
</html>
