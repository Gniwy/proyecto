<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
 integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
 crossorigin=""></script>

 <script type="text/javascript">

 var mymap = L.map('mapid').setView([36.72868753921603, -4.436373287304718], 12);

 	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
 		maxZoom: 18,
 		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
 			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
 			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 		id: 'mapbox.streets'
 	}).addTo(mymap);





 </script> -->

<div class="col-md-4 ">
  <form class="form-horizontal" role="form">
   <div class="form-group">
       <label for="address" class="col-md-3 control-label">Dirección</label>
       <div class="col-md-9">
           <input id="address" class="form-control" type="textbox" value="Paises bajos">
       </div>
   </div>
   <div class="form-group">
       <div class="col-md-offset-3 col-md-4">
         <button type="button" class="btn btn-primary" onclick="codeAddress()">Obtener Coordenadas GPS</button>
       </div>
   </div>
 </form>

 <form class="form-horizontal" role="form">
   <h4>GD (grados decimales)*</h4>
   <div class="form-group">
       <label class="col-md-3 control-label" for="latitude">Latitud</label>
       <div class="col-md-9">
           <input id="latitude" class="form-control" type="textbox">
       </div>
   </div>

   <div class="form-group">
       <label class="col-md-3 control-label" for="longitude">Longitud</label>
       <div class="col-md-9">
           <input id="longitude" class="form-control" type="textbox">
       </div>
   </div>

   <div class="form-group">
       <div class="col-md-offset-3 col-md-4">
         <button type="button" class="btn btn-primary" onclick="codeLatLng(1)">Obtener Dirección</button>
       </div>
   </div>
 </form>
</div>

<div class="col-md-6" id="map" style="width:60vw; height:55vh;">
</div>
