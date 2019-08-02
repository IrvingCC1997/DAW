<?php
/*
* Views Usuarios 
*
* @author Alberto León
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
								<a class="dropdown-item" href="<?=base_url();?>UsuariosAdmin/logout">Cerrar Sesión</a>
							</div>
					</li>
					</ul>
				</div>
			</div>
		</nav>
	</header><br>
	
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-12 col-lg-12 col-xl-12">
				<div class="user"><a href="<?=base_url();?>UsuariosAdmin/add_User"><i class="fas fa-user-plus"></i> Usuario</a></div>
				<div class="card-table">
					<table class="table table-hover">
						<thead>
							<tr>
							<th scope="col">Número del usuario</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido</th>
							<th scope="col">Permisos</th>
							<th scope="col">Acciones </th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($products as $aux){?>
							<tr>
								<th scope="row"><?=$aux->noUsuario;?></th>
								<td><?=$aux->nombreUsuario;?></td>
								<td><?=$aux->apellidoUsuario;?></td>
								<td><?php if($aux->permisos > 1){echo "Administrador";}else{echo "Super Administrador";} ?></td>
								<td>
									<?php 
										if($aux->permisos > 1){
											echo '
												<a href="' . base_url() . 'UsuariosAdmin/modificarUsuarios/' . $aux->noUsuario . '" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
												<a href="' . base_url() . 'UsuariosAdmin/eliminarUsuarios/' . $aux->noUsuario . '" class="btn btn-danger"><i class="fas fa-user-times"></i> Eliminar</a>	
											';
										}else{
											echo "No hay acciones";
										}
									?>
								</td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- JQuery -->
	<script type="text/javascript" src="<?=base_url();?>js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/mdb.min.js"></script>
</body>
</html>
