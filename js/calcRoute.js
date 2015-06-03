function calcRoute() {
  // First, remove any existing markers from the map.
  for (var i = 0; i < markerArray.length; i++) {
    markerArray[i].setMap(null);
  }

  // Now, clear the array itself.
  markerArray = [];

  // Retrieve the start and end locations and create
  // a DirectionsRequest using DRIVING directions.
  var start = document.getElementById('origem');
  var end = document.getElementById('destino');
  
  var request = {
      origin: start.value,
      destination: end.value,
      travelMode: google.maps.TravelMode.DRIVING
  };

  // Route the directions and pass the response to a
  // function to create markers for each step.
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
      calcTarifa(response.routes[0].legs[0].distance.text);
    }
  });
}