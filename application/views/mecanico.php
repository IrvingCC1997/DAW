<?php
/*
* Vista mecanico 
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
		<center><h1 class="titulos">Servicios Mecánicos</h1></center>
		<div class="row">
		<?php 
			if($productos){
				foreach($productos as $aux){	
		?>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
						<div class="zoom">
							<div class="card-store">
								<img src="<?=base_url();?>images/images_upload/<?=$aux->imagen1;?>" alt="<?=$aux->nombreProducto?>" class="img-store">
								<div class="card-body product">
								<h5 class="titulo"><a href="<?=base_url();?>productosAdmin/detalleProducto/<?=$aux->idProducto?>"><?=$aux->nombreProducto?></a></h5>
								<span class="categoria"><i class="fas fa-tags"></i> <?=$aux->nombreCategoria?></span>
								<h6 style="color: #197339; margin-top: 1rem;">$<?=$aux->precioVenta?></h6>
								<hr>
									<?php
										echo form_open('carrito/add');
											echo form_hidden('id', $aux->idProducto);
											echo form_hidden('name', $aux->nombreProducto);
											echo form_hidden('price', $aux->precioVenta);
									?>
									<center><div id='add_button'>
										<?php
											$btn = array(
											'class' => 'btn add-shop',
											'value' => 'AGREGAR AL CARRITO ',
											'name' => 'action'
											);
											echo form_submit($btn);
										echo form_close();
										?>
									</div></center>
								</div>
							</div>
						</div>
					</div><br>
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
		</div><br>
	</div>
</main>