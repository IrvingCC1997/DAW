<?php
/*
* View Finalizar Compra 
*
* @author Alberto León
* @package application/vista
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
	<title>Finalizar Compra | Agrotracsem</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
<body>
<main>
	<div class="contenedorLogin mt-5">
		<div class="card-cuenta">
        <center><img src="<?=base_url();?>/images/logoAgrotracsem.jpg" alt="Logo Agrotracsem" style="width: 150px;"></center>
			<form action="#" method="post">
				<center><h4 class="titulo">Finaliza tu compra</h4></center><br>
				<label for="nombres" id="name">Dirección de envío:</label>
				<input type="text" name="nombre" id="nombres" class="form-control input" placeholder="Hidalgo #236"><br>
                
                <label for="apellidos" id="apellido">Colonia:</label>
                <input type="text" name="apellido" id="apellidos" class="form-control input" placeholder="Centro"><br>
                
                <label for="Ciudad">Selecciona la ciudad</label>
                <select name="ciudad" id="Ciudad" class="form-control input">
                    <option value=""></option>
                </select>

                <label for="Ciudad">Selecciona el método de envío</label>
                <select name="ciudad" id="Ciudad" class="form-control input">
                    <option value=""></option>
                </select>

                <label for="Ciudad">Selecciona la método de pago</label>
                <select name="ciudad" id="Ciudad" class="form-control input">
                    <option value=""></option>
                </select>
                <br>
                <button class="btn btn-primary btn-block">FINALIZAR COMPRA</button>
			</form>
		</div>
	</div>
</main>