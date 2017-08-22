<!DOCTYPE html>
<html>
<head>

  <title>Geolocation Marker Example Usage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">


<style>
html, body, #map_canvas {
  margin: 0;
  padding: 0;
  height: 100%;
}
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="./js/geolocation-marker.js"></script>


<link rel = "stylesheet" type = "text/css" href = "./css/core.css">
<link rel = "stylesheet" type = "text/css" href = "./css/style.css">

<script>
var map, GeoMarker;

function initialize() {
  var mapOptions = {
    zoom: 17,
    center: new google.maps.LatLng(-34.397, 150.644),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map_canvas'),
  mapOptions);

  GeoMarker = new GeolocationMarker();
  GeoMarker.setCircleOptions({fillColor: '#808080'});

  google.maps.event.addListenerOnce(GeoMarker, 'position_changed', function() {
    map.setCenter(this.getPosition());
    map.fitBounds(this.getBounds());
  });

  google.maps.event.addListener(GeoMarker, 'geolocation_error', function(e) {
    alert('There was an error obtaining your position. Message: ' + e.message);
  });

  GeoMarker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

if(!navigator.geolocation) {
  alert('Your browser does not support geolocation');
}
</script>

</head>

<body>

  <div class="row">
    <div class="col-xs-12 center">
      <p> test
      </div>
    </div>

    <div class="row" id="maps" style="margin-top:80px"><!-- wraps-->
      <div class="col-sm-12"><!-- wraps-->
        <img class="img-responsive center-block" src="images/after/after-map.jpg" alt="rocknroll">
      </div><!-- col-->
    </div><!-- row-->


    <div class="row">
      <div class="col-xs-12 center">
        <p> test
        </div>
      </div>

      <div id="map_canvas"></div>

      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlH6U6c26dd8pcYs6y3JwLayh2vybyPYs&callback=initMap">
      </script>


      <div class="row">
        <div class="col-xs-12 center">
          <p> test
          </div>
        </div>
