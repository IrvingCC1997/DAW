<?php
/*
* Vista Contacto 
*
* @author Alberto León
* @package application/views
*
* @version 1.0.0
* Creado lunes, 29/07/2019
* Ultima modificación de 31/07/2019
*/
?>
<main>
	<div class="container">
		
	<center><h1 class="titulos">Contactános</h1></center>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<p class="titulos">Ponte en contacto con nosotros, visitanos en nuestra tienda física que se ubicada 
					en Libramiento Acámbaro-Salvatierra #20, Acámbaro, Gto. en nuestros horarios de atención.</p>
				
				<div class="card-horario z-depth-1">
					<center><p><i class="far fa-clock"></i> Lunes: 08:00 - 16:00</p></center>
				</div>
				<div class="card-horario z-depth-1">
					<center><p><i class="far fa-clock"></i> Martes: 08:00 - 16:00</p></center>
				</div>
				<div class="card-horario z-depth-1">
					<center><p><i class="far fa-clock"></i> Miercoles: 08:00 - 16:00</p></center>
				</div>
				<div class="card-horario z-depth-1">
					<center><p><i class="far fa-clock"></i> Jueves: 08:00 - 16:00</p></center>
				</div>
				<div class="card-horario z-depth-1">
					<center><p><i class="far fa-clock"></i> Viernes: 08:00 - 16:00</p></center>
				</div>
				
				<div class="toast-inactive" id="toast-nombre"></div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<div class="card-contacto" style="padding: 20px; margin-bottom: 30px !important;">
					<form action="contacto/guardarComentario" method="post">
						<center><h3 class="titulos" style="color: #07598C;">Mensaje directo</h3></center>
						<label for="nombre" id="name">Ingresa tu nombre:</label>
						<input type="text" name="nombre" id="nombre" class="form-control input" placeholder="Agrotracsem"><br>

						<label for="correo" id="mail">Ingresa tu correo electrónico:</label>
						<input type="text" name="correo" id="correo" class="form-control input" placeholder="agrotracsem@apptracsem.com"><br>
						
						<label for="mensaje" id="message">Ingresa tu mensaje</label>
						<textarea name="mensaje" id="mensaje" cols="30" rows="4" class="form-control input" placeholder="Mensaje..."></textarea><br>

						<center><button class="btn btn-primary" id="button" onclick="return validarCampos();">ENVIAR MENSAJE</button></center>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<br>

<script>
	function validarCampos(){
		let nombre = document.getElementById("nombre").value;
		let correo = document.getElementById("correo").value;
		let mensaje = document.getElementById("mensaje").value;
		if(nombre == ""){
			document.getElementById("name").innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span class="error">El nombre es obligatorio</span>';
			return false;
		}else if(correo == ""){
			document.getElementById("mail").innerHTML = '<i class="fas fa-envelope error"></i> <span class="error">El correo es obligatorio</span>';
			return false;
		}else if(mensaje == ""){
			document.getElementById("message").innerHTML = '<i class="fas fa-comment error"></i> <span class="error">El mensaje es obligatorio</span>';
			return false;
		}
		else{
			return true;
		}
	}
</script>
