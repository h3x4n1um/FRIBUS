<?php
  include 'stdfribus.html';
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
      var pos = new google.maps.LatLng(10.0272537, 105.7698039);

      function initialize(){
        map = new google.maps.Map(document.getElementById('map'), {
          center: pos,
          zoom: 13
        });
        infoWindow = new google.maps.InfoWindow({map: map});
        /*HTML5 geolocation*/
        if(navigator.geolocation){
          navigator.geolocation.getCurrentPosition(
            function(position){
              /*Reset current position*/
              pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              }
              /*Reset map center*/
              map.setCenter(pos);
              /*Create window above position*/
              infoWindow.setPosition(pos);
              infoWindow.setContent('Vị trí của bạn.');
              /*Geolocation city*/
              var Geocoder = new google.maps.Geocoder();
              Geocoder.geocode({location: pos}, function(GeocoderResult, GeocoderStatus){
                if (GeocoderStatus == google.maps.GeocoderStatus.OK){
                  for (var i = 0; i < GeocoderResult[0].address_components.length; ++i){
                    for (var j = 0; j < GeocoderResult[0].address_components[i].types.length; ++j){
                      if (GeocoderResult[0].address_components[i].types[j] == "administrative_area_level_1"){
                        var city = GeocoderResult[0].address_components[i];
                        break;
                      }
                    }
                  }
                }
                /*Draw a small map from fusion table*/
                var FusionTablesLayer = new google.maps.FusionTablesLayer({
                  map: map,
                  query: { 
                    from: '1AZc6fOIRth4r2iyONZWiFnj4qhmjLVqrFPH6QBT2'
                  }
                });
              });
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter())
            });
        }
        else{
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Lỗi: Định vị thất bại.':
                              'Lỗi: Trình duyệt của bạn không hỗ trợ định vị.');
        if (browserHasGeolocation) alert('Geolocation HTML5 qua giao thức HTTP không hỗ trợ bởi trình duyệt của bạn. Xem thêm tại https://goo.gl/rStTGz')
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