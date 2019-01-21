


// Busca la empresa

let map = L.map('mapEmpresa').setView([36.543880623629846, -4.6306729316711435], 18)


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
  //L.marker([36.543880623629846, -4.6306729316711435]).addTo(map);


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

     $('#lat').val(e.latlng.lat);
     $('#lng').val(e.latlng.lng);

   });

   //map
   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     maxZoom: 19,
     minZoom: 2,
     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

     //map.remove();
    setTimeout(function(){ 
      map.invalidateSize()}, 400);


// mapa de la ubicacion de la empresa

$('#boton2').click(function(){

  //valores de las coordenadas
  var lat = document.getElementById('lat').value;
  var lng = document.getElementById('lng').value;

  let map2 = L.map('mapEmpZone').setView([lat, lng], 18)

  //marker
  L.marker([lat, lng]).addTo(map2)
  .bindPopup('Esta es la empresa elegida.')
  .openPopup();

   //map
   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     maxZoom: 19,
     minZoom: 2,
     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map2);


map2.invalidateSize();

});


// $("a[href='#menu1']").on('shown.bs.tab', function(e) {
//      map.invalidateSize();
// });
