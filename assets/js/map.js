require('leaflet');
// maps
let maps = JSON.parse(localisations.dataset.maps);

var map = L.map('localisations').setView([47.901402, 1.903920], 9);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    zoomControl: true,
    scrollWheelZoom: false,
    minZoom: 7,
    maxZoom: 10,
}).addTo(map);
map.scrollWheelZoom.disable();
map.on('focus', () => {
    map.scrollWheelZoom.enable();
});
map.on('blur', () => {
    map.scrollWheelZoom.disable();
});

var homeIcon = L.icon({
    iconUrl: require('../images/homepage/leaf_home.png'),
    iconSize: [25, 35], // size of the icon
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

maps.forEach(function (maps) {
    marker = new L.marker([maps.longitude, maps.latitude], {icon: homeIcon})
        .bindPopup(maps.name)
        .addTo(map);
    
});

