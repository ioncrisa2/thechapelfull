$(document).ready(function () {
    const map = L.map("map").setView([1.544144, 124.946771], 20);

    // Base layers
    const esriSatellite = L.tileLayer(
        "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
        {
            attribution: "The Chapel Resort #tropicalview",
        }
    );

    const openStreetMap = L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            maxZoom: 19,
            attribution: "© OpenStreetMap contributors",
        }
    );

    // Add Esri Satellite as the default layer
    esriSatellite.addTo(map);

    // Base layers control
    const baseLayers = {
        "Esri Satellite": esriSatellite,
        "OpenStreetMap": openStreetMap,
    };
    L.control.layers(baseLayers).addTo(map);

    // Add a marker at the center
    const marker = L.marker([1.544144, 124.946771]).addTo(map);

    // Add a popup with a clickable link
    const googleMapsLink = `https://www.google.com/maps?q=1.544144,124.946771`;
    marker.bindPopup(
        `<a href="${googleMapsLink}" target="_blank">Open in Google Maps</a>`,
        { closeButton: true }
    ).openPopup();
});