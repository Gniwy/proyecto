<form action="sql/consulta_buscador.php" method="post" class="form-inline col-centrada col-12">
  <div class="col-12 img"></div>
  <div class="row form-group col-10 mb-2">
    <select class="col-4 col-sm-4 col-md-4 form-control" name="comunidad" id="select_comunidad">
      <option value="">Todas las comunidades</option>
      <?php
      // barra selectora de la comunidades
        $consulta = "SELECT * FROM `comunidades` WHERE 1";
        $sql = mysqli_query($link,$consulta);

        while ($row = mysqli_fetch_assoc($sql))
        {
          echo '<option value="'.$row['id'].'">'.$row['comunidad'].'</option>';
        }
       ?>
    </select>
    <select class="col-4 col-sm-4 col-md-4 form-control" name="provincia" id="select_provincia">
      <option value="">Todas las provincias</option>
    </select>
    <select class="col-4 col-sm-4 col-md-4 form-control" name="localidad">
      <option value="">Todas las localidades</option>
      <?php
      // barra selectora de la localidades
        $consulta = "SELECT * FROM `localidad` WHERE 1";
        $sql = mysqli_query($link,$consulta);

        while ($row = mysqli_fetch_assoc($sql))
        {
          echo '<option value="'.$row['cp'].'">'.$row['nombre'].'</option>';
        }
       ?>
    </select>
    <input type="text" class="col-12 form-control" name="trabajo" id="trabajo" placeholder="Ej: Carrefour">
  </div>
  <div class="col-2">
    <input type="submit" name="enviar" value="Buscar" class="btn btn-primary mb-2">
  </div>
  <div class="col-md-12 text-center">
    ¿No encuentras la empresa que buscas?
    <button type="button" class="btn-warning btn" name="button" id="btn_modal_empresa" data-toggle="modal" data-target="#modal_crear_empresa">Creala</button>
  </div>
</form>



<div id="mapid" style="width:500px; height:500px;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
 integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
 crossorigin=""></script>

 <script type="text/javascript">

 var mymap = L.map('mapid').setView([40.0000000, -4.0000000], 6);

 	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
 		maxZoom: 18,
 		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
 			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
 			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 		id: 'mapbox.streets'
 	}).addTo(mymap);


 </script>
