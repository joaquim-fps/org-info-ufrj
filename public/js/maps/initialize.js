/**
 * Created by Joaquim on 03/06/2015.
 */
var map;
var directionsDisplay;
var directionsService;
var markerArray = [];

function initialize() {
    // Instantiate a directions service.
    directionsService = new google.maps.DirectionsService();

    // Create a map and center it on Rio de Janeiro.
    var rioDeJaneiro = new google.maps.LatLng(-22.8820913, -43.238735);

    var mapOptions = {
        zoom: 12,
        center: rioDeJaneiro
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Create a renderer for directions and bind it to the map.
    var rendererOptions = {
        map: map,
        draggable: true
    };

    directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

    // Get inputs for auto complete.
    var inputOrigem = document.getElementById('origem'),
        inputDestino = document.getElementById('destino');

    // Set bounds for auto complete.
    rioDeJaneiro = new google.maps.LatLngBounds(
                            new google.maps.LatLng(-22.8820913, -43.238735),
                            new google.maps.LatLng(-22.8820913, -43.238735)
                        );

    // Declare options for auto complete.
    var options = {
        bounds: rioDeJaneiro,
        types: ['address']
    };

    // Instantiate auto complete service.
    autoCompleteOrigem = new google.maps.places.Autocomplete(inputOrigem, options);
    autoCompleteDestino = new google.maps.places.Autocomplete(inputDestino, options);

    // Create a listener for updating the map when directions change through dragging the markers on the map
    google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
        //updates the inputs with the new locations
        document.getElementById('origem').value = directionsDisplay.getDirections().routes[0].legs[0].start_address;
        document.getElementById('destino').value = directionsDisplay.getDirections().routes[0].legs[0].end_address;

        //calculates the new distance and price
        calcTarifa(directionsDisplay.getDirections().routes[0].legs[0].distance.text);
    });
}

initialize();