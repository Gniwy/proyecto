//
// var map = L.map('map', {
// center: [51.505, -0.09],
// zoom: 13
// });
let map = L.map('map').setView([36.7212737, -4.42139880000002],8)

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

let marker = L.marker([36.5424771, -4.64486850000003]).addTo(map);
