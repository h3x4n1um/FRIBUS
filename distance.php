<?php
  include 'header.html';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Distance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body onload="incomplete()">
    <div id="map"></div>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCpqK0y2zfq5DoD_KLsoWn3Ec7-BjY0k80"></script>
    <script type="text/javascript">
      var map;
      var infoWindow;
      var pos = new google.maps.LatLng(10.045412, 105.7795429);
      function initialize(){
        map = new google.maps.Map(document.getElementById('map'), {
          center: pos,
          zoom: 17
        });
      }
      google.maps.event.addDomListener(window, 'load', function(){
        initialize();
      });
      function incomplete(){
          alert("Under construction :)");
      }
    </script>
  </body>
</html>

<?php
  include 'footer.html';
?>