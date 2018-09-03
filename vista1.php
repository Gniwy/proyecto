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
  <link rel="stylesheet" href="modulos/menu_top/css/menu-top.css">
  <link rel="stylesheet" href="modulos/footer/css/footer.css">
  <!-- hoja de estilos de las paginas -->
  <link rel="stylesheet" href="modulos/buscador_principal/css/buscador_principal.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="modulos/modulo_mapa/css/style.css">

  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />

  <!-- mapa -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@0.7.7/dist/leaflet.css" />

  <link rel="stylesheet" href="maps/docs/dist/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@latest/assets/css/leaflet.css" />
</head>

<body>


<div id="app">
</div>

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

  <!-- mapa  -->
  <script type="text/javascript" src="maps/docs/dist/bundle.min.js" charset="utf-8"></script>

</body>

</html>
