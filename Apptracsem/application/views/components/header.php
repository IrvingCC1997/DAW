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
							<img src="<?=base_url();?>images/logoNH.png" class="images logoNH" alt="Logo New Holland">
							<img src="<?=base_url();?>images/logoAgrotracsem.jpg" class="images logoAgrotracsem" alt="Logo Agrotracsem">
							<img src="<?=base_url();?>images/case.png" class="images logoNH" alt="Logo Case">
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark primary-color">
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
				<ul class="navbar-nav mx-auto">
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
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Productos</a>
							<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?=base_url();?>Insumos">Insumos agrícolas</a>
								<a class="dropdown-item" href="#">Servicio mecánico</a>
								<a class="dropdown-item" href="#">Refacciones</a>
							</div>
					</li>

					<li class="nav-item">
					<a class="nav-link" href="<?=base_url();?>Cuenta">Mi cuenta</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Carrito</a>
					</li>

				</ul>

				</div>
				<!-- Collapsible content -->

		</nav>
		<!--/.Navbar-->
		</div>
	</header>
