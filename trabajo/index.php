
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Servicio Comercial</title>
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/css/main.css">
<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
</head>
<body class="m-0 p-0 line-26">
<?php include '../header.php'?>

	<section id="inicio" class="col-12">
<!-- <img src="/img/somos.jpg" alt="" width="100%" height=""> -->
<div class="image no-repeat cover vertical-50 bg-position-right triangle"></div>
<div class="absolute bottom-5m flex col-12 center">
<div class="column">
<h1 class="center p-0 m-0 handlee">
Servicio Comercial
</h1>
<p class="p-1 justify handlee">
Aseo general y profundo de oficinas, bodegas, edificios áreas comunes, lavado de pisos, escaleras, baños, limpieza de escritorios, ventanas, cafetines, y labores relacionadas con el ambiente, atención a la cafetería (repartición y preparación de bebidas de oficina directamente a la empresa que se le presta el servicio.
</p>

<div class="handlee">
<hr>
Servicio con respaldo contra daños y garantía.
<hr>
Flexibilidad en los horarios, de acuerdo a tus necesidades,
<hr>
Selección de personal estrictamente rigurosa.
<hr>
Verificación de experiencia y antecedentes.
<hr>
sino quedas a gusto con tu servicio, te damos uno gratis...
    <hr>
</div>
    <!-- <li></li> -->

</div>

<div class="column">
    <br>
        <form action="../PHPMailer-master/send.php" method="POST">
                <input type="text" name="nombre" id="nombre" class="col20em p-1" placeholder="Nombre" required>
                     <br><br>
                <input type="text" class="col20em p-1" name="type" value="Servicio Comercial" readonly>
                <br><br>
                <input type="tel" name="celular" id="celular" class="col20em p-1" name="celular" placeholder="Celular" required>
                <br><br>
                <input type="email" name="correo" id="correo" class="col20em p-1" name="correo" placeholder="Correo electrónico" required>
                <br><br>
                <textarea name="recomendacion" id="recomendacion" cols="25" class="col20em p-1" name="mensaje" rows="8" placeholder="Mensaje o recomendaciones" required>

                </textarea>
                <br><br>
                <button type="submit" class="p-1">Cotizar en línea</button>
                &nbsp;
                <button class="p-1">Buscando tranajo</button>
                
                

</form>
</div>

</div>
</section>

	<script>
	function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
	</script>
<?php include '../footer.php'?>
<br><br>
</body>
</html>