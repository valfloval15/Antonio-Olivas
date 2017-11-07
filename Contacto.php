<html>
<head>

	<title>Antonio Olivas</title>
	<!--Import Google Icon Font-->
	<script src="https://use.fontawesome.com/fa605f432e.js"></script>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">

	html{
		height: 100%;
	}

	.container {
		width: 30%;
	}	
	li{
		font-family: helvetica;
		font-weight: lighter;
		font-size: 50%;
	}	
	.input-field label {
		color: white	;
	}
	#map {
		height: 100%;
		max-height: 53.5vh;
		background-color: grey;
	}

</style>

</head>

<body background="web_Tony_Fondo.png">

	<nav>
		<div class="nav-wrapper black">
			<p href="#!" class="brand-logo flow-text hide-on-small-only" style="margin: 0px;"><span class="grey-text">Antoni</span>Olivas Design+Creative<span class="red-text">.</span></p>
			<p href="#!" class="brand-logo flow-text show-on-small hide-on-med-and-up" style="margin: 0px;"><span class="grey-text">Antoni</span>Olivas<span class="red-text">.</span></p>
			<ul class="right hide-on-med-and-down">
				<li><a href="index.html">Inicio<span class="red-text">.</span></a></li>
				<li><a href="curriculum.html">Curriculum<span class="red-text">.</span></a></li>
				<li><a href="Empleador.html">Empleador<span class="red-text">.</span></a></li>
				<li><a href="galeria.html">Galeria<span class="red-text">.</span></a></li>
				<li><a href="clientes.html">Clientes<span class="red-text">.</span></a></li>
				<li><a href="contacto.php"><span class="red-text">Contactanos.</span></a></li>
				<li><a href="https://www.instagram.com/antoniolivasdesign/"><i class="fa fa-instagram" aria-hidden="true" style="color: red;"></i></a></li>
				<li><a href="https://www.facebook.com/AntonioOlivasDisign/"><i class="fa fa-facebook-official" aria-hidden="true" style="color: red;"></i></a></li>
			</ul>
			<ul id="slide-out" class="side-nav">
				<li><div class="user-view">
					<div class="background">
						<img src="file:///Macintosh HD/Users/valeriafloresvalles/Downloads/images/office.jpg">
					</div>
				</div></li>
				<li><a href="index.html">Inicio<span class="red-text">.</span></a></li>
				<li><a href="curriculum.html">Curriculum<span class="red-text">.</span></a></li>
				<li><a href="Empleador.html">Empleador<span class="red-text">.</span></a></li>
				<li><a href="galeria.html">Galeria<span class="red-text">.</span></a></li>
				<li><a href="clientes.html">Clientes<span class="red-text">.</span></a></li>
				<li><a href="contacto.php"><span class="red-text">Contactanos.</span></a></li>
			</ul>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i>
			</a>
		</div>
	</nav>
	<div class="row" style="margin-bottom: 0px;">
		<div class="col s12 m8 offset-s1" style="padding-right: 0px;">
			<form method="GET">
				<div class="col s5">
					<div class="input-field col s12">
						<input placeholder="Nombre" id="Nombre" name="nombre" required type="text" class="validate white-text">
					</div>
					<div class="input-field col s12">
						<input placeholder="Telefono" id="Telefono" name="telefono" type="text" class="validate white-text">
					</div>
					<div class="input-field col s12">
						<input placeholder="Tu Correo" id="Correo" name="email" type="email" required class="validate white-text">
					</div>
				</div>
				<div class="col s7">
					<div class="input-field col s12">
						<textarea id="textarea1" name="comentarios" required class="materialize-textarea white-text"></textarea>
						<label for="textarea1">Comentarios</label>
						<button class="btn waves-effect waves-light red" style="width: 100%" type="submit">Enviar</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col s3 right hide-on-small-only" style="padding: 0px;">
			<img src="horario.png" class="responsive-img right" style="height: 90.2vh">
		</div>
		<div class="col s12 m9" id="map" style="padding-right: 0px;">
		</div>
	</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script type="text/javascript">
	// Initialize collapse button
	$(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  
</script>
<script>
	var map;
	function initMap() {
		var uluru = {lat: 31.7510324, lng: -106.4496282};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 15,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDttv_N5SBTmrEZ66Enlx-13yP9UoqDrCI&callback=initMap" async defer></script>


</body>
</html>

<?php

if (isset($_GET['nombre']) && isset($_GET['telefono']) && isset($_GET['email']) && isset($_GET['comentarios'])) {
	$to = "tonyoglez@gmail.com";
	$subject = "Comentarios Portafolio";
	$txt = "Nombre: ". $_GET['nombre']. "\n" ."Telefono: " . $_GET['telefono'] . "\n" . "Comentarios:\n" . $_GET['comentarios'];
	$headers = "From: " . $_GET['email'] . "\r\n";

	mail($to,$subject,$txt,$headers);
}

?>