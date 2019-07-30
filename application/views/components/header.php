<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$title;?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xl-12">
						<center>
							<div class="d-none d-md-block d-lg-block d-xl-block">
								<img src="<?=base_url();?>images/logoNH.png" class="images logoNH" alt="Logo New Holland">
								<img src="<?=base_url();?>images/logoAgrotracsem.jpg" class="images logoAgrotracsem" alt="Logo Agrotracsem">
								<img src="<?=base_url();?>images/case.png" class="images logoNH" alt="Logo Case">
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark primary-color">
		<div class="container">

				<!-- Navbar brand -->
				<a class="navbar-brand d-lg-none d-xl-none" href="<?=base_url();?>">Agrotracsem</a>

				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
				</button>

				<!-- Collapsible content -->
				<div class="collapse navbar-collapse" id="basicExampleNav">
				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
					<a class="nav-link" href="<?=base_url();?>Inicio">Inicio
						<span class="sr-only">(current)</span>
					</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="<?=base_url();?>Historia">Historia</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="<?=base_url();?>Contacto">Contacto</a>
					</li>

					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Categorias <i class="fas fa-angle-down"></i></a>
							<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?=base_url();?>Insumos">Insumos Agrícolas</a>
								<a class="dropdown-item" href="<?=base_url();?>Mecanico">Servicio Mecánico</a>
								<a class="dropdown-item" href="<?=base_url();?>Refacciones">Refacciones</a>
							</div>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Carrito <i class="fas fa-shopping-cart"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>Cuenta">Mi cuenta <i class="fas fa-user"></i> </a>
					</li>
				</ul>

				</div>
				<!-- Collapsible content -->

		</nav>
		<!--/.Navbar-->
		</div>
	</header>
