var lat = document.getElementById('lat').value;
var lng = document.getElementById('lng').value;

if (lat != "") {

let map = L.map('mapFichaEmp').setView([lat, lng], 18)

 //map
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
   maxZoom: 19,
   minZoom: 2,
   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

//marker
 L.marker([lat, lng]).addTo(map)
.bindPopup('Esta es la empresa elegida.')
.openPopup();


}else {
  $('#mapFichaEmp').html('<img src="http://www.igad.edu.ec/img/titulo-matriculas-abiertas.png" alt="" width="300" height="200">');
}
