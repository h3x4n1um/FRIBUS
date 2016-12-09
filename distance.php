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
      /* Optional: Makes the page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body onload="incomplete()">
    <div id="map"></div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry&key=AIzaSyCpqK0y2zfq5DoD_KLsoWn3Ec7-BjY0k80"></script>
    <script type="text/javascript">
      /*Initial data*/
      var map;
      var infoWindow;
      var pos = new google.maps.LatLng(10.0272537, 105.7698039);
      var pos_arr = new Array();
      var DirectionsService = new google.maps.DirectionsService();
      var DirectionsRenderer = new google.maps.DirectionsRenderer();

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
              console.log(pos);

              /*Reset map center*/
              map.setCenter(pos);
              /*Create window above position*/
              infoWindow.setPosition(pos);
              infoWindow.setContent('Vị trí của bạn.');
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter())
            });
        }

        map.addListener('click',
          function(mouse_pos){
            if (pos_arr.length < 2){
              var marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                map: map,
                position: mouse_pos.latLng
              });

              marker.addListener('click',
                function(){
                  marker.setMap(null);
                  for (var i = 0; i < pos_arr.length; ++i){
                    if (pos_arr[i] == marker.getPosition()){
                      pos_arr.splice(i, 1);
                    }
                  }
                  console.log(pos_arr.length);
                }
              );

              pos_arr[pos_arr.length] = mouse_pos.latLng;
              console.log(pos_arr[pos_arr.length - 1]);

              if (pos_arr.length == 2){
                var result = Math.round(google.maps.geometry.spherical.computeDistanceBetween(pos_arr[0], pos_arr[1]) / 1000);
                console.log(result);

                alert('Khoảng cách giữa 2 điểm bạn chọn là ' + result + ' km');
              }
            }
            else{
              alert('Bạn đã chọn 2 địa điểm rồi!');
            }
          }
        );
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Lỗi: Định vị thất bại.':
                              'Lỗi: Trình duyệt của bạn không hỗ trợ định vị.');
        if (browserHasGeolocation) alert('Geolocation HTML5 qua giao thức HTTP không hỗ trợ bởi trình duyệt mã nguồn Chronium. Xem thêm tại https://goo.gl/rStTGz')
      }

      google.maps.event.addDomListener(window, 'load', function(){
        initialize();
      });

      function incomplete(){
          alert('Under construction :)');
      }
    </script>
  </body>
</html>

<?php
  include 'footer.html';
?>