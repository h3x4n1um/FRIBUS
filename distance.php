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
      /*Initial fusion_table*/
      const fusion_table = new Array();
      fusion_table['An Giang'] = '155sn2EOpf5Kbx-W1otFFUrTO9CnNk__S2AN7RH0v';
      fusion_table['Bà Rịa - Vũng Tàu'] = '1vjCrk3MwJqHxqPYzUPfbT27KfR4F1In4dTo5wNm7';
      fusion_table['Bắc Giang'] = '1GpfHl7ThtmRoyP9hYoKRWmTcUUj_8TDLG9D8iHAz';
      fusion_table['Bắc Kạn'] = '1vdQUnB2TjeBFvJVyxm81mMiUUq8lyDYbgtspegVN';
      fusion_table['Bạc Liêu'] = '1C3SPkdoWZSRj6oXGF_B9sz1g28orXRXNh7_YAW59';
      fusion_table['Bắc Ninh'] = '1b0SIqy4slXurNN90dQB8UC6sgD3gpYumRTpg7yM9';
      fusion_table['Bến Tre'] = '1nrGn3tCNVVR_-Kdbz0VxowPScndWisvxlaTTyYBQ';
      fusion_table['Bình Định'] = '1aT06VbIZe-dCpM4rE04CLbondsmflNBW7EvygN26';
      fusion_table['Bình Dương'] = '1GIvvzJWL8HEmrxrucKUJCqAC3rRf1DZ42CXQmqgQ';
      fusion_table['Bình Phước'] = '1Tb1RLrMTYul6aozFE0Tjhnhh-v9bf2vFrQ-OE4ti';
      fusion_table['Bình Thuận'] = '1jHs-u_gHnRYiuibeOaQmHzg1M9j_bAdmBRD2aGqM';
      fusion_table['Cà Mau'] = '1sIr410YTBYIeEHpKjnjZjgi0-82zisJKnUXL-JkC';
      fusion_table['Cần Thơ'] = '1AZc6fOIRth4r2iyONZWiFnj4qhmjLVqrFPH6QBT2';
      fusion_table['Cao Bằng'] = '1WhTqkLsgVYPhRQZRA2xKUeWBn1UP2tLtDZW8yThS';
      fusion_table['Đà Nẵng'] = '1HWFkkNZjGzbiQ4XyVvKWz8Mc47TjlmKmI1bc02u_';
      fusion_table['Đắk Lắk'] = '16qxSOwn-nZnQwhvfNVRSy5VAeiMnFgajLxNZ19Ux';
      fusion_table['Đắk Nông'] = '1OsT3hjlKjFWEM8-inBiZZf-iHj--eN-pADvWtbnB';
      fusion_table['Điện Biên'] = '1ads6dCL3gm4q2P4GMpWFt1pR0PbG6juLH1gMlikW';
      fusion_table['Đồng Nai'] = '19B12XWnaCMBZgu37Z9KZRwcPIuIvFzY7hVsJBgHJ';
      fusion_table['Đồng Tháp'] = '1-0fghxuG51YMQVrJV7DOjJsCuKZDH5J31hSnCWJv';
      fusion_table['Gia Lai'] = '1KfWbCleKLZosssJWMzAAcwdlSdK5cpja6Gbo8X1s';
      fusion_table['Hà Giang'] = '1Kz1BZdoH8LSERNasSe8FjWQg1I-uyupwh07F5mEt';
      fusion_table['Hà Nam'] = '1ivLbrBrzPQTeFg7QPvCmcD7pBnNufpABsHbZe2fu';
      fusion_table['Hà Nội'] = '19ZuuDJNalGkLte43U2A6FiUh5C6zyG-rnrtPclEu';
      fusion_table['Hà Tĩnh'] = '1EEW3AkCrSOsfsL0oSnMFLC4DQSIC0GFrUP7pETMt';
      fusion_table['Hải Dương'] = '18B99VzpSZV8-uiUkqJ54DLCjitbpPTz8B58EbyO0';
      fusion_table['Hải Phòng'] = '1p0k9WxRcYxHsAuU_8WfYc59OwyfDwN0wBnNOC3ui';
      fusion_table['Hậu Giang'] = '1RpYgr0ON9iIuUw30w9rdsFaHQsK_J5-1Qd5ZC68S';
      fusion_table['Hồ Chí Minh'] = '1ltnm_Ixbltowtu33CBnvSkz-oIrqt1Fvxzef4TR4';
      fusion_table['Hòa Bình'] = '1eAmV6SWHyVf0xnYPWdaOFiDTlFxMn3ldK38P3jIc';
      fusion_table['Hưng Yên'] = '1D5t09Rov_tCbzJ_P6lpm0zEjcveZRuT_HLyI8Har';
      fusion_table['Khánh Hòa'] = '11Z6MrKdkmJHnkaNPJSoT8JJgNI3JGagN5hXMZXZn';
      fusion_table['Kiên Giang'] = '1sg_1So6BCpYvvW2Ud94PMcqw1M_NCoKLPBsMpvqg';
      fusion_table['Kon Tum'] = '1pccYz9gGtAzGSLi0I00s5HHp5pUFU_JXznbNfr0M';
      fusion_table['Lai Châu'] = '1epP407jphGCs5FOTzdHbqKsF-lrRr_GNkJx4L2zO';
      fusion_table['Lâm Đồng'] = '1VMh2i-77LAL4PUkIBtmbKjJwSU_YjUy4th2ghgKU';
      fusion_table['Lạng Sơn'] = '10X3UHCcbHviKJoo-cCfDLA_0vVP85syG-GzyK6BS';
      fusion_table['Lào Cai'] = '174QdMJGIuqs3NmIETgy8Ktn1oL8hE5r_Irir_bDv';
      fusion_table['Long An'] = '1D0tBJC2F3P2ED-lHx0DUM1tI2jN4tx0KM0gWKCLj';
      fusion_table['Nam Định'] = '16az03bWa2N6G82rjaumhKQXMmGgjWjPIj8sYV6lI';
      fusion_table['Nghệ An'] = '10A0AWXuvhh4CVF8eNYBxnK0gIPTTIA5Hbj0CTNJp';
      fusion_table['Ninh Bình'] = '1WaP0en7giG7M7dWHZftAExhCGEGEOQu6BAiJXPYv';
      fusion_table['Ninh Thuận'] = '10hBaScjFRyxfwaH9kJR365vsAEGlWfA5yMH5sh0N';
      fusion_table['Phú Thọ'] = '1HdfH-SABSdd0gKNrwH3Aqo6PvS9raXOqwwJylicg';
      fusion_table['Phú Yên'] = '14R7iZanOGCeqpoz24z-xnl0UM5Y4G8cRD7k4nsqP';
      fusion_table['Quảng Bình'] = '18MJu4N_sXYJwNoZ3GokVCW76ta-xeFckM1TKZKY2';
      fusion_table['Quảng Nam'] = '1BnYM79pY94NP4VTgDGb6FEm053liHr1pAPV-G0OX';
      fusion_table['Quảng Ngãi'] = '1u-hUtkf-yvsIL4UefrFheYt6B2ee_A8pXCvHVJr6';
      fusion_table['Quảng Ninh'] = '1-LKo7wwR9C4E16049VG8pjDeELO5C9iOvSPgtqPC';
      fusion_table['Quảng Trị'] = '1MLR6GDYkJErT_T6FyANvPrcXz_fa1xoHnp8LAIsR';
      fusion_table['Sóc Trăng'] = '1c58pWQ_T_CaNcHUPcYO1dll5vlqSzJFZ0fhAD2zy';
      fusion_table['Sơn La'] = '1tFJQ0rTW-buiBWg9ezJDD1lTbKK_MJaZdt3I17Sr';
      fusion_table['Tây Ninh'] = '1RadB6qHxnk6c0JcGMB98n0rBzjqNYyyostLGK3iX';
      fusion_table['Thái Bình'] = '1lCl3Gi6EolBhI7loqzvBhjLx2iIQUvy2NwdS59yy';
      fusion_table['Thái Nguyên'] = '1XBWm65kQFxLfOs9ZDGt22weGe0AXwQaJCy0FK24E';
      fusion_table['Thanh Hóa'] = '16AfyqCjfaeAz_IidI21YM9oNZthy2Bep1IG8pDPb';
      fusion_table['Thừa Thiên Huế'] = '1MauEFioX-O7CwtKOiihhAda3dFga6yijF00VQWVu';
      fusion_table['Tiền Giang'] = '1nM9AeKvFlkPrIBY0EBxFW9nhWgDgkS6snJP8MKyw';
      fusion_table['Trà Vinh'] = '1A8dJXdQtqe-0Hlax-0BqhjzULkjizPftzKBhWwlP';
      fusion_table['Tuyên Quang'] = '1YnEHTSDqO4iYS0ynPVdaM4hx-BeyJr2sjrk4WbxK';
      fusion_table['Vĩnh Long'] = '1ni_F82IjlOq_M87bj_YTdLOMx7AAGgwpKKKJEJxn';
      fusion_table['Vĩnh Phúc'] = '13HRtwfB55PuZhe7cgdZ5KwfTpUfXiMbPuWY-RerB';
      fusion_table['Yên Bái'] = '1tvV3ekAXGRJoXShE1_9SluaF4pJgDmt6NnO4Sl7w';
      
      /*Initial data*/
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
              console.log(pos);
              /*Reset map center*/
              map.setCenter(pos);
              /*Create window above position*/
              infoWindow.setPosition(pos);
              infoWindow.setContent('Vị trí của bạn.');
              /*Geolocation city*/
              var Geocoder = new google.maps.Geocoder();
              Geocoder.geocode({location: pos}, function(GeocoderResult, GeocoderStatus){
                if (GeocoderStatus == google.maps.GeocoderStatus.OK){
                  console.log(GeocoderResult[0]);
                  for (var i = 0; i < GeocoderResult[0].address_components.length; ++i){
                    for (var j = 0; j < GeocoderResult[0].address_components[i].types.length; ++j){
                      if (GeocoderResult[0].address_components[i].types[j] == "administrative_area_level_1"){
                        var city = GeocoderResult[0].address_components[i];
                        break;
                      }
                    }
                  }
                }
                console.log(city);
                /*Draw a small map from fusion table*/
                var FusionTablesLayer = new google.maps.FusionTablesLayer({
                  map: map,
                  query: { 
                    from: fusion_table[city.short_name]
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
        if (browserHasGeolocation) alert('Geolocation HTML5 qua giao thức HTTP không hỗ trợ bởi trình duyệt mã nguồn Chronium. Xem thêm tại https://goo.gl/rStTGz')
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