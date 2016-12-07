<?php include
  'stdfribus.html';
  'header.html';
?>

<!DOCTYPE html>
<html>
  <title>FRIBUS</title>
  <body>

    <!-- Modal -->

    <div class="w3-row-padding w3-center w3-margin-top">
      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Tìm kiếm trạm xe buýt</h4><br>
          <a href="busmap.html">
            <i class="fa fa-map-marker w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          </a>
          <p>Tìm trạm xe buýt lân cận</p>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Tính chi phí</h4><br>
          <a href="cost.php">
            <i class="fa fa-usd w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          </a>
          <p>Tính chi phí theo độ dài quảng đường</p>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Đo khoảng cách giữa các quận, huyện và xã</h4><br>
          <a href="distance.html">
            <i class="fa fa-map w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          </a>
          <p>Đo khoảng cách nhanh chóng, tiện lợi</p>
        </div>
      </div>
    </div>

    <!--Music
    <audio autoplay="autoplay" loop ="loop">
      <source src="http://data.chiasenhac.com/downloads/1725/3/1724807-8ccb2484/m4a/Canon%20-%20London%20Philharmonic%20Orchestra_Da%20%5BM4A%20500kbps%5D.m4a" type="audio/mp4" />
      <p>Your browser does not support HTML5 audio.</p>
    </audio>-->
    
  </body>
</html>

<?php include
  'footer.html';
?>