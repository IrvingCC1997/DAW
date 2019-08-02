<?php
/*
* Vista detalle producto 
*
* @author Irving Cruz
* @package application/views
*
* @version 1.0.0
* Creado jueves, 01/08/2019
* Ultima modificación de 01/08/2019
*/
?>
<main>
    <div class="container mt-4">
        <div class="row">
            <?php 
                if($setProduct){
                    foreach($setProduct as $flag){ 
                        
            ?>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Productos</li>
                        <li class="breadcrumb-item"><?=$flag->nombreCategoria?></a></li>
                        <li class="breadcrumb-item active"><?=$flag->nombreProducto?></li>
                    </ol>
                </nav>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100 img-carousel" src="<?=base_url();?>images/images_upload/<?=$flag->imagen1;?>"
                                alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100 img-carousel" src="<?=base_url();?>images/images_upload/<?=$flag->imagen2;?>"
                                alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100 img-carousel" src="<?=base_url();?>images/images_upload/<?=$flag->imagen3;?>"
                                alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2><?=$flag->nombreProducto;?></h2>
                    <span class="categoria"><i class="fas fa-tags"></i> <?=$flag->nombreCategoria?></span>
                    <hr>
                    <p class="mt-4 mb-4">Descripción del producto: <?=$flag->descripcionProducto;?></p>
                    <hr>
                    <p class="mt-5" style="color: #0375B4;"><i class="fas fa-box-open"></i> Hoy puedes comprar <?=$flag->stock;?> piezas</p>
                    <p class="mt-2" style="color: #0375B4;"><i class="fas fa-shipping-fast"></i> Recibelo en la puerta de tu casa</p>
                    <p class="mt-5" style="color: #007849;">Precio: $<?=$flag->precioVenta;?> pesos mexicanos</p>
                    <hr>
                    <?php
										echo form_open('carrito/add');
											echo form_hidden('id', $flag->idProducto);
											echo form_hidden('name', $flag->nombreProducto);
											echo form_hidden('price', $flag->precioVenta);
									?>
									<div id='add_button'>
										<?php
											$btn = array(
											'class' => 'btn add-shop',
											'value' => 'AGREGAR AL CARRITO ',
											'name' => 'action'
											);
											echo form_submit($btn);
										echo form_close();
										?>
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