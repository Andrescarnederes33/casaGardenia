<!DOCTYPE html>
<html lang="en">

<head>
  <?php $title = "Servicio doméstico"; include '../head.php'?>
</head>

<body class="m-0 p-0 line-26">
  <?php include '../header.php'?>

  <section id="inicio">
    <!-- <img src="/img/somos.jpg" alt="" width="100%" height=""> -->
    <!-- <div class="image no-repeat cover vertical-50 bg-position-right triangle"></div> -->
    <!-- <div class="absolute bottom-5m flex col-12 center"> -->
    <div class="containerServices">
    
    <div class="cloumnServices">
        <h1 class="handlee">
          Servicio Doméstico
        </h1>
        <p class="p-1 justify handlee">
          Aseo general y profundo, lavado de baños, cocina, nevera, pisos, ventanas, programación de lavado en lavadora
          y extendido de ropa, lavado a mano de prendas delicadas, servicio de planchado no mayor a (4) horas, servicio
          de cocina básica (Preparación de jugos, sándwich, picado de frutas y verduras) No incluye trabajo en alturas,
          en el caso de ser necesario, es a solicitud y solo para contratos fijos diarios.
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

      <div class="cloumnServices">
        <?php include '../form.php'?>
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