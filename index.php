<?php

include ('conexion/conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="image/ico_logo.ico" />
  <title>IReferences</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <!-- font-family -->
  <link rel="stylesheet" href="css/font-family/Lobster.ttf">
  <!-- hoja de estilos de las paginas -->

  <!-- <link rel="stylesheet" href="modulos/footer/css/footer.css">
  <link rel="stylesheet" href="modulos/buscador_principal/css/buscador_principal.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="modulos/modulo_mapa/css/style.css"> -->
  <!-- icon -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <!-- mapa -->
  <link rel="stylesheet" href="leaflet/leaflet.css">
  <!-- <link rel="stylesheet" href="leaflet/plugins/L.Control.MousePosition.css"> -->
  <!-- <link rel="stylesheet" href="leaflet/plugins/L.Control.Locate.css"> -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>

  <!-- jQuery 12.1.1 necessary jqueryUI -->
  <script src="js/jquery-ui.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/index.js"></script>


  <!-- <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script> -->

  <!-- mapa  -->
  <!-- <script type="text/javascript" src="leaflet/leaflet.js"></script>
  <script type="text/javascript" src="leaflet/plugins/Search.js"></script>
  <script type="text/javascript" src="leaflet/plugins/L.Control.Locate.js"></script> -->

</head>

  <body style="background: #3399ff;">
    <div id="main">

      <!-- HEADER -->
      <section>
        <?php include "modulos/menu_top/menu_top.php"; ?>
      </section>
      <!-- Contenido principal -->
      <section class="container-fluid buscadorPrincipal" id="cuerpo">
        <div class="row col-10">
          <?php include "modulos/buscador_principal/buscador_principal.php";?>
        </div>

      </section>

      <!-- Fondo menu principal -->
      <div class='ripple-background'>
        <div class='circle xxlarge shadow1'></div>
        <div class='circle xlarge shadow2'></div>
        <div class='circle large shadow3'></div>
        <div class='circle medium shadow4'></div>
        <div class='circle small shadow5'></div>
      </div> <!-- Fin de ripple -->

    </div>

      <!--FOOTER-->
      <?php include "modulos/footer/footer.php"; ?>

  </body>
</html>
