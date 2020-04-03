
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aseo profundo y general</title>
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/main.css">
<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
</head>
<body>

<?php include './header.php'?>

<section>
<!-- <img src="/img/somos.jpg" alt="" width="100%" height=""> -->
<div class="image no-repeat cover vertical-40 bg-position-right triangle"></div>
<div class="absolute bottom-5 col-12">
<!-- <center><img src="/img/logo.png" alt="" width="100" height="60"></center> -->
	<h1 class="center">
		<h1 class="handlee center" id="app"></h1>
		<script src='/script/core.js'></script>

		<script type="text/javascript">
		var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('Aseo profundo y general !')
    .pauseFor(2500)
    .deleteAll()
    .typeString('Soluciones de limpieza')
    .pauseFor(2500)
    .deleteChars(11)
    .typeString('a medida de tus necesidades !')
    .pauseFor(2500)
    .start();


	function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

		</script>


</h1>

	<p class="p-l1 p-r1 center handlee">Personal confiable, idóneo y capacitado para realizar sus labores !

<div class="containerButtons">
<a href="/domestico" class="buttonPrincipal handlee">
<img src="/img/house.svg" class="" id="active-snackbar" alt="" width="25" height="25">
&nbsp;
Servicio Doméstico
</a>

<a href="/comercial" class="buttonPrincipal handlee">
<img src="/img/build.svg" class="" id="" alt="" width="25" height="25">
&nbsp;
Servicio Comercial
</a>

</div>

<p class="center handlee">
<a href="#nosotros">¿Como funciona?</a>
</p>
	</p>
</div>
</section>

<section id="nosotros" class="flex"  name="nosotros">
<div class="column">
<h1 class="center handlee bold-100">¿Quienes somos?</h1>
<center>
<img src="/img/ours.svg" alt="" width="60" height="60">
</center>
<p class="justify p-1 handlee bold-100">Casa Gardenia es una empresa que se encarga de suministrar servicio de colaboradoras de aseo, por días o por horas de acuerdo a la necesidad de nuestros clientes, contratamos formal y directamente a nuestras empleadas, vinculadas con todos los requisitos legales, personal confiable, idóneo y capacitado para realizar sus labores.</p>
</div>
<div class="column">
	<h1 class="center handlee bold-100">¿Que nos diferencia en el mercado?</h1>
	<center>
<img src="/img/select.svg" alt="" width="50" height="50">
	</center>
<p class="justify p-1 handlee">
Selección de personal estrictamente rigurosa. Visita domiciliaria, para brindarle seguridad y tranquilidad a nuestros clientes, del personal que ingresa.
</p>
</div>
<div class="column">
	<h1 class="center handlee bold-100">Te proteges contra demandas</h1>
	<center>
<img src="/img/money.svg" alt="" width="50" height="50">
	</center>
<p class="justify p-1 handlee">
Sabías que tener personal que preste servicios de aseo en alguna empresa o familia, debe de estar afiliado a un servicio de seguridad social integral, Ningún servicio laboral es la excepción a la regla.
</p>

</div>

</section>

<!-- <hr> -->
<!-- <section id="porque" class="flex">

<div class="column">
<p class="p-1 handlee">
		Aseo general y profundo de oficinas, bodegas, edificios áreas comunes, lavado de pisos, escaleras, baños, limpieza de escritorios, ventanas, cafetines, y labores relacionadas con el ambiente, atención a la cafetería (repartición y preparación de bebidas de oficina directamente a la empresa que se le presta el servicio
</p>
</div>
<br><br>
<div class="column center">
<p class="p-1 handlee">
Aseo general y profundo, lavado de baños, cocina, nevera, pisos, ventanas, programación de lavado en lavadora y extendido de ropa, lavado a mano de prendas delicadas, servicio de planchado no mayor a (4) horas, servicio de cocina básica (Preparación de jugos, sándwich, picado de frutas y verduras) No incluye trabajo en alturas, en el caso de ser necesario, es a solicitud y solo para contratos fijos diarios.
</p>
</div>

</section> -->
<!-- <hr> -->
<section class="" id="comentarios">

</section>
	
<script src="/script/jquery.min.js"></script>
<script src="/script/waypoints.min.js"></script>
<script>

  new Waypoint({
  element:document.getElementById("active-snackbar"),
  handler: function(direction) {
	if(direction == "down"){
		myFunction()
	}
	else{
		console.log("No")
	}
// document.getElementById("nosotros").classList.toggle("slideInUp");
// console.log("dirección", direction)
// myFunction()
  }
});

function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 9000);
}

</script>	
<?php include './footer.php'?>
<br><br>
</body>
</html>