<?php

include ('conexion/conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="image\favicon.png" />
  <title>IReferences</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <!-- hoja de estilos de las paginas -->
  <link rel="stylesheet" href="modulos/footer/css/footer.css">
  <link rel="stylesheet" href="modulos/buscador_principal/css/buscador_principal.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="modulos/modulo_mapa/css/style.css">
  <!-- font-family -->
  <link rel="stylesheet" href="/css/font-family/Lobster.ttf">
  <!-- icon -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <!-- mapa -->
  <link rel="stylesheet" href="leaflet/leaflet.css">
  <link rel="stylesheet" href="leaflet/plugins/L.Control.MousePosition.css">
  <!-- <link rel="stylesheet" href="leaflet/plugins/L.Control.Locate.css"> -->

</head>

<body>
  <div id="main">

    <!-- HEADER -->
    <div id="div_menu_top"><?php include "modulos/menu_top/menu_top.php"; ?></div>
    <!-- Contenido principal -->
    <section class="container-fluid buscadorPrincipal" id="cuerpo">
      <div class="row col-10 offset-1">
        <?php include "modulos/buscador_principal/buscador_principal.php";?>
      </div>

  </section>

  <!--FOOTER-->
  <?php include "modulos/footer/footer.php"; ?>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>

  <!-- jQuery 12.1.1 necessary jqueryUI -->
  <script src="js/jquery-ui.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/index.js"></script>

  <!-- jQuery autocomplete (accion select_lugar) -->
  <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script>


  <!-- <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script> -->

  <!-- mapa  -->
  <script type="text/javascript" src="leaflet/leaflet.js"></script>
  <script type="text/javascript" src="leaflet/plugins/Search.js"></script>
  <script type="text/javascript" src="leaflet/plugins/L.Control.Locate.js"></script>

  <!-- SCRIPT MAP -->
  <script type="text/javascript">

  let map = L.map('map').setView([36.543880623629846, -4.6306729316711435], 18)

  //map
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    minZoom: 2,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

    //mapa geografico
    // L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    // attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
    // }).addTo(map);

  //colocar marcador de empresa
  var marker = {};
  map.on('click', function(e){

    // eliminar marcador si hay otro
    if (marker != undefined) {
      map.removeLayer(marker);
    }

    // colocar marcador
    marker = L.marker(e.latlng).addTo(map);
  //  console.log(search1._map._lastCenter);
    console.log(e.latlng);
    // guardar valor para usar con ajax
    var data = {
        lat: e.latlng.lat,
        lng: e.latlng.lng
    }
  });

  // crear localizador geografico
  var lc = L.control.locate().addTo(map);

  lc.start();


  //marker (puntero custom)
  var myIcon = L.icon({
    iconUrl: 'leaflet/images/marker-icon.png',
    iconSize: [68, 95],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
    shadowUrl: 'leaflet/images/marker-shadow.png',
    shadowSize: [68, 95],
    shadowAnchor: [22, 94]
    });
  //L.marker([40.7277831, -74.0080852], {icon: myIcon}).addTo(map);
  L.marker([36.543880623629846, -4.6306729316711435]).addTo(map);


  // buscador
   var search1 = L.control.search().addTo(map);


  </script>

  <script type="text/javascript">
  /*
fuente:
http://www.drupalcoder.com/blog/cross-browser-sticky-footer-with-fluid-height-using-jquery
*/
// $(document).ready(function() {
// positionFooter();
//
// $(window)
//   .scroll(positionFooter)
//   .resize(positionFooter);
//
// function positionFooter() {
//   var docHeight = $(document.body).height() - $("#sticky-footer-push").height();
//   if(docHeight < $(window).height()){
//     var diff = $(window).height() - docHeight;
//     if (!$("#sticky-footer-push").length > 0) {
//       $(".footer").before('<div id="sticky-footer-push"></div>');
//     }
//     $("#sticky-footer-push").height(diff);
//   }
// }
// });
//
//
//
// $(".footer").stickyFooter();
//
// // sticky footer plugin
// (function($){
// var footer;
//
// $.fn.extend({
//   stickyFooter: function(options) {
//     footer = this;
//
//     positionFooter();
//
//     $(window)
//       .scroll(positionFooter)
//       .resize(positionFooter);
//
//     function positionFooter() {
//       var docHeight = $(document.body).height() - $("#sticky-footer-push").height();
//       if(docHeight < $(window).height()){
//         var diff = $(window).height() - docHeight;
//         if (!$("#sticky-footer-push").length > 0) {
//           $(footer).before('<div id="sticky-footer-push"></div>');
//         }
//         $("#sticky-footer-push").height(diff);
//       }
//     }
//   }
// });
// })(jQuery);

  </script>

</body>

</html>
