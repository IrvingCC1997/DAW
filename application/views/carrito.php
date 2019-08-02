<html>
<head>
    <title>Carrito de compras | Agrotracsem</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/mdb.min.css" rel="stylesheet">
	<link href="<?=base_url();?>css/style.css" rel="stylesheet">
<script type="text/javascript">
function clear_cart() {
    var result = confirm('¿Deseas quitar todos los productos de tu carrito?');

    if (result) {
        window.location = "<?php echo base_url(); ?>index.php/carrito/remove/all";
    } else {
        return false; // cancel button
    }
}
</script>
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
							aria-haspopup="true" aria-expanded="false">Productos <i class="fas fa-angle-down"></i></a>
							<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?=base_url();?>Insumos">Insumos Agrícolas</a>
								<a class="dropdown-item" href="<?=base_url();?>Mecanico">Servicio Mecánico</a>
								<a class="dropdown-item" href="<?=base_url();?>Refacciones">Refacciones</a>
							</div>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>Carrito">Carrito <i class="fas fa-shopping-cart"></i></a>
					</li>
					<li class="nav-item">
						<?php 
							if($this->session->userdata('login') == true){
								echo '
								<li class="nav-item dropdown">
									<a class="nav-link" id="userActive" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user-circle"></i> ' . $this->session->userdata("nombre") . ' <i class="fas fa-angle-down"></i></a>
										<div class="dropdown-menu dropdown-primary" aria-labelledby="userActive">
											<a class="dropdown-item" href="' . base_url() .'Cuenta/logout">Cerrar Sesión</a>
										</div>
								</li>
								';
							}else{
								echo '<a class="nav-link" href="' . base_url() . 'Cuenta">Mi cuenta <i class="fas fa-user"></i> </a>';
							} 
						?>
					</li>
				</ul>

				</div>
				<!-- Collapsible content -->

		</nav>
		<!--/.Navbar-->
		</div>
	</header>

<div class='container mt-5'>
    <div id="cart" >
        <div id = "heading">
        <h2 align="center">Productos en tu carrito</h2>
    </div>

    <div id="text">
        <?php $cart_check = $this->cart->contents();

        // If cart is empty, this will show below message.
        if(empty($cart_check)) {
        echo '
            <div class="alert alert-danger mt-5" role="alert">
                Para agregar productos en tu carrito haz clic en el botón "Agregar al carrito"
            </div>
        ';
        } ?>
    </div>

    <table class="table table-hover mt-5">
        <?php
        // All values of cart store in "$cart".
        if ($cart = $this->cart->contents()): ?>
            <tr id= "main_heading">
            <td>Serial</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Pago</td>
            <td>Quitar Producto</td>
            </tr>
        <?php
            // Create form and send all values in "carrito/update_cart" function.
            echo form_open('carrito/update_cart');
            $grand_total = 0;
            $i = 1;

            foreach ($cart as $item):
            // echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            // Will produce the following output.
            // <input type="hidden" name="cart[1][id]" value="1" />

            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
        ?>
        <tr>
        <td>
            <?php echo $i++; ?>
        </td>
        <td>
            <?php echo $item['name']; ?>
        </td>
        <td>
            $ <?php echo number_format($item['price'], 2); ?>
        </td>
        <td>
    <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" class="form-control input" style="text-align: right"'); ?>
    </td>
    <?php $grand_total = $grand_total + $item['subtotal']; ?>
    <td>
    $ <?php echo number_format($item['subtotal'], 2) ?>
    </td>
    <td>

    <?php
    // cancle image.
    $path = '<i class="fas fa-trash"></i>';
    echo anchor('carrito/remove/' . $item['rowid'], $path); ?>
    </td>
    <?php endforeach; ?>
    </tr>
    <tr>
    <td><b>Total a pagar: $<?php

    //Grand Total.
    echo number_format($grand_total, 2); ?></b></td>

    <?php // "clear cart" button call javascript confirmation message ?>
    <td colspan="5" align="right"><input type="button" value="limpiar" class='btn add-shop' onclick="clear_cart()">

    <?php //submit button. ?>
    <button class='btn add-shop' type="submit">Actualizar <i class="fas fa-sync"></i></button>
    <?php echo form_close(); ?>

    <!-- "Place order button" on click send "billing" controller -->
    <button class='btn add-shop' value="COMPRAR" onclick="window.location = 'Comprar'">Comprar <i class="far fa-thumbs-up"></i></button></td>
    </tr>
    <?php endif; ?>
    </table>
    </div>
    
</div>
</body>
</html>