<?php

include ('conexion/conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <!-- hoja de estilos de las paginas -->
  <link rel="stylesheet" href="modulos/menu_top/css/menu-top.css">
  <link rel="stylesheet" href="modulos/footer/css/footer.css">
  <link rel="stylesheet" href="modulos/buscador_principal/css/buscador_principal.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="modulos/modulo_mapa/css/style.css">
  <!-- icon -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <!-- mapa -->
  <link rel="stylesheet" href="leaflet/leaflet.css">
  <link rel="stylesheet" href="leaflet/plugins/L.Control.MousePosition.css">

</head>

<body>
  <!-- HEADER -->
  <?php include "modulos/menu_top/menu_top.php"; ?>

  <!-- Contenido principal -->
  <section class="container-fluid">
    <div class="row col-10 offset-1">
      <?php include "modulos/buscador_principal/buscador_principal.php";?>
    </div>
    <!-- mapa -->
    <div style="position: relative;">
      <?php include"modulos/modulo_mapa/mapa.php"; ?>
    </div>
  </section>

  <!--FOOTER-->
  <?php include "modulos/footer/footer.php"; ?>

  <!-- Modal registro-->
  <div id="div_modal_registro"><?php include "modales/modal_registro.php"; ?></div>

  <!-- Modal login-->
  <div id="div_modal_login"><?php include "modales/modal_login.php"; ?></div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>

  <!-- jQuery 12.1.1 necessary jqueryUI -->
  <script src="js/jquery-ui.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/index.js"></script>

  <script type="text/javascript" src="modulos/menu_top/js/menu_top.js"></script>

  <!-- jQuery autocomplete (accion select_lugar) -->
  <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script>


  <!-- <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script> -->
  <!-- mapa  -->
  <script type="text/javascript" src="leaflet/leaflet.js"></script>
  <script type="text/javascript" src="leaflet/plugins/Search.js"></script>
  <script type="text/javascript" src="leaflet/plugins/L.Control.MousePosition.js"></script>

  <script type="text/javascript">

  let map = L.map('map').setView([40.7277831, -74.0080852], 18)

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

  //mapa geografico
  // L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
	// attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
  // }).addTo(map);

  // buscador
  map.addControl(L.control.search());

  //coordenadas
  L.control.mousePosition().addTo(map);

  </script>

</body>

</html>
