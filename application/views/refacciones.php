<?php
/*
* Vista refacciones 
*
* @author Alberto León
* @package application/views
*
* @version 1.0.0
* Creado -
* Ultima modificación de 01/08/2019
*/
?>
<div class="growl-notice"></div>
<main>
	<div class="container">
		<center><h1 class="titulos">Refacciones</h1></center>
		<div class="row">
		<?php 
			if($productos){
				foreach($productos as $aux){	
		?>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
						<div class="zoom">
							<div class="card-store">
								<img src="<?=base_url();?>images/upload_images/<?=$aux->imagen1?>" alt="<?=$aux->nombreProducto?>" class="img-store">
								<div class="card-body product">
								<h5 class="titulo"><a href=""><?=$aux->nombreProducto?></a></h5>
								<span class="categoria"><i class="fas fa-tags"></i> <?=$aux->nombreCategoria?></span>
								<h6 style="color: #197339; margin-top: 1rem;">$<?=$aux->precioVenta?></h6>
								<hr>
								<center><a href="<?=base_url();?>Productos/detalleProducto/<?=$aux->idProducto?>" onclick="return displayGrowl();" class="add-shop">AGREGAR AL CARRITO <i class="fas fa-shopping-cart"></i></a></center>
								</div>
							</div>
						</div>
					</div>
		<?php 
			
				}
			}else{
				echo'
					<div class="alert alert-primary" style="width: 100%;" role="alert">
						<center>Aún no se han agregado productos a esta categoria</center>
					</div>
				';
			} 
		?>
		</div>
	</div>
</main>