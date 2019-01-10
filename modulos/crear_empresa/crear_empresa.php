<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear Empresa</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../modulos/menu_top/css/menu-top.css">
    <link rel="stylesheet" href="../../modulos/footer/css/footer.css">
    <link rel="stylesheet" href="../../modulos/buscador_principal/css/buscador_principal.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../modulos/filtro/css/style.css">
    <link rel="stylesheet" href="../../css/style_vista2.css">
    <!-- mapa -->
    <link rel="stylesheet" href="../../leaflet/leaflet.css">
    <!-- <link rel="stylesheet" href="../../leaflet/plugins/L.Control.MousePosition.css"> -->

    <link rel="stylesheet" href="css/style.css">

    <script src="../../js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="../../js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.js"></script>

    <script type="text/javascript" src="../../js/index.js"></script>

    <script type="text/javascript" src="../../modulos/menu_top/js/menu_top.js"></script>

    <!-- jQuery autocomplete (accion select_lugar) -->
    <script type="text/javascript" src="../../modulos/buscador_principal/js/buscador_principal.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
  </head>
  <body>
    <section>
      <?php include"../../modulos/menu_top/menu_top.php" ?>
    </section>

    <section style="width:50%; margin:auto;">

      <h1>Como crear tu empresa</h1>

      <table class="table-borderless" >
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">1. Pon sus datos</th>
            <th scope="col"></th>
            <th scope="col">2. Ubica su sitiacion</th>
            <th scope="col"></th>
            <th scope="col">3. Publicalo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td><img src="img/data_enterprise.png" alt="" width="100"></td>
            <td><img src="img/arrow.png" alt="" width="50" height="50"></td>
            <td><img src="img/gps_enterprise.png" alt="" width="100"></td>
            <td><img src="img/arrow.png" alt="" width="50" height="50"></td>
            <td><img src="img/upload_enterprise.png" alt="" width="100"></td>
          </tr>
        </tbody>
      </table>

    </section>
    <br>
    <!-- paso 1 DATOS -->
    <section id="paso1">
      <div style="width: 45%; margin: auto; border-top: 1px solid;"></div>
      <br>

      <div class="datos" style="width: 50%; margin: auto; border-right: 1px solid; border-left: 1px solid; padding:15px; padding-left: 30px;">
        <div class="">
          <label>Nombre: </label>
          <input type="text" name="nombre" value="" required>
        </div>
        <div class="">
          <label>Tipo: </label>
          <input type="text" name="tipo" value="" required>
        </div>
        <div class="">
          <label>Zona: </label>
          <input type="text" name="zona" value="">
        </div>
        <div class="">
          <label>CP: </label>
          <input type="number" name="cp" value="">
        </div>
        <div class="">
          <button class="btn btn-primary pull-right" type="button" name="paso1" id="boton1">Siguiente</button>
        </div>
      </div>

      <br>
      <div style="width: 45%; margin: auto; border-bottom: 1px solid;"></div>
    </section>


    <!-- paso 2 UBICACION -->
    <section id="paso2" style="display: none;">
      <div style="width: 45%; margin: auto; border-top: 1px solid;"></div>
      <br>

      <div class="datos" style="width: 50%; margin: auto; border-right: 1px solid; border-left: 1px solid; padding:20px;">
        <h3>Selecione la ubicacion de la empresa </h3>
        <div id="mapEmpresa" style="width: auto; height: 400px;">
        </div>
        <div class="">
          <button class="btn btn-primary pull-right" type="button" name="paso2" id="boton2">Siguiente</button>
        </div>
      </div>

      <br>
      <div style="width: 45%; margin: auto; border-bottom: 1px solid;"></div>
    </section>

    <!-- paso 3 PUBLICACION/REVISION -->
    <section id="paso3" style="display: none;">
      <div style="width: 45%; margin: auto; border-top: 1px solid;"></div>
      <br>

      <div class="datos" style="width: 50%; margin: auto; border-right: 1px solid; border-left: 1px solid; padding:20px;">
        <h3>Revisa los datos antes de que sean publicados </h3>
        <table class="table-hover">
          <tbody>
            <tr>
              <th>Nombre: </th>
              <td>NULL</td>
            </tr>
            <tr>
              <th>Tipo: </th>
              <td>NULL</td>
            </tr>
            <tr>
              <th>Zona: </th>
              <td>NULL</td>
            </tr>
            <tr>
              <th>CP: </th>
              <td>NULL</td>
            </tr>
          </tbody>
        </table>
        <div id="mapEmpZone" style="width: auto; height: 400px;"></div>
        <div class="">
          <button class="btn btn-primary pull-right" type="button" name="paso3" id="boton3">Publicar</button>
        </div>
      </div>

      <br>
      <div style="width: 45%; margin: auto; border-bottom: 1px solid;"></div>
    </section>

    <footer>
      <?php include "../../modulos/footer/footer.php"; ?>
    </footer>

    <!-- Visibilidad -->
    <script type="text/javascript">

    var paso1 = document.getElementById('boton1');
    var paso2 = document.getElementById('boton2');
    var paso3 = document.getElementById('boton3');

    var div1 = document.getElementById('paso1');
    var div2 = document.getElementById('paso2');
    var div3 = document.getElementById('paso3');

   paso1.onclick = function()
     {
        div2.style.display = "block";
        div1.style.display = "none";
     }
   paso2.onclick = function()
     {
        div3.style.display = "block";
        div2.style.display = "none";
     }
   paso3.onclick = function()
     {
       alert('Gracias por su colaboracion.');
       window.location.href = "../../index_vista2.php";
     }


    </script>


    <!-- mapa  -->
    <script type="text/javascript" src="../../leaflet/leaflet.js"></script>
    <script type="text/javascript" src="../../leaflet/plugins/Search.js"></script>
    <script type="text/javascript" src="../../leaflet/plugins/L.Control.Locate.js"></script>


    <script type="text/javascript">
    let map = L.map('mapEmpresa').setView([36.543880623629846, -4.6306729316711435], 18)

    //map
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      minZoom: 2,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

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

    </script>
    <script type="text/javascript">
      let mapZone = L.map('mapEmpZone').setView([36.543880623629846, -4.6306729316711435], 18)

      //map
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        minZoom: 2,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(mapZone);

      L.marker([51.5, -0.09]).addTo(mapZone)
    .bindPopup('Esta es la empresa elegida.')
    .openPopup();


    </script>
  </body>
</html>
