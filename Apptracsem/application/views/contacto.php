<main>
	<div class="container">
		
	<center><h1 class="titulos">Contactános</h1></center>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<p class="titulos">Ponte en contacto con nosotros, visitanos en nuestra tienda física que se ubicada 
					en Libramiento Acámbaro-Salvatierra #20, Acámbaro, Gto. en nuestros horarios de atención.</p>
				<ul>
					<li class="horarios">Lunes: 08:00 - 16:00</li>
					<li class="horarios">Martes: 08:00 - 16:00</li>
					<li class="horarios">Miercoles: 08:00 - 16:00</li>
					<li class="horarios">Jueves: 08:00 - 16:00</li>
					<li class="horarios">Viernes: 08:00 - 16:00</li>
				</ul>
				
				<div class="toast-inactive" id="toast-nombre"></div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<div class="card-contacto" style="padding: 20px; margin-bottom: 30px !important;">
					<form action="" method="post">
						<center><h3 class="titulo" style="color: #07598C;">Mensaje directo</h3></center>
						<label for="nombre">Ingresa tu nombre:</label>
						<input type="text" id="nombre" class="form-control input" placeholder="Agrotracsem"><br>

						<label for="correo">Ingresa tu correo electrónico:</label>
						<input type="text" id="correo" class="form-control input" placeholder="agrotracsem@apptracsem.com"><br>
						
						<label for="mensaje">Ingresa tu mensaje</label>
						<textarea name="mensaje" id="mensaje" cols="30" rows="4" class="form-control input" placeholder="Mensaje..."></textarea><br>

						<center><button class="btn btn-secondary btn-block" onclick="return validarCampos();">Contactar</button></center><br>
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
		let ts = document.getElementById("toast-nombre")
		if(nombre == ""){
			ts.innerHTML = '<i class="fas fa-exclamation-circle"></i> El nombre es obligatorio';
			ts.className = "toast-active";
			setTimeout(function(){ ts.className = ts.className.replace("toast-active", "toast-inactive"); }, 4000);
			return false;
		}else if(correo == ""){
			ts.innerHTML = '<i class="fas fa-exclamation-circle"></i> El correo es obligatorio';
			ts.className = "toast-active";
			setTimeout(function(){ ts.className = ts.className.replace("toast-active", "toast-inactive"); }, 4000);
			return false;
		}else if(mensaje == ""){
			ts.innerHTML = '<i class="fas fa-exclamation-circle"></i> El mensaje es obligatorio';
			ts.className = "toast-active";
			setTimeout(function(){ ts.className = ts.className.replace("toast-active", "toast-inactive"); }, 4000);
			return false;
		}
	}
</script>
