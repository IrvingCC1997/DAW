<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Método de Pago | Agrotracsem</title>
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
					<li class="nav-item active">
						<a class="nav-link" href="<?=base_url();?>ProductosAdmin">Agregar Productos <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>CiudadAdmin">Agregar Ciudad</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>EstadoAdmin">Agregar Estado</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>UsuariosAdmin">Usuarios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>MetodoEnvioA">Método de envío</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>MetodoPagoA">Método de pago</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>ClientesAdmin">Clientes</a>
					</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Se imprime todo el contenido que tiene la variable -->
	<?=$output;?>
	<!-- Se utiliza la función que ya esta precargada para utilizar archivos JS -->
	<?php foreach($js_files as $files): ?>
		<script src="<?=$files;?>"></script>
	<?php endforeach; ?>
</body>
</html>
