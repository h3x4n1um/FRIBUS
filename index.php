<?php
  include 'stdfribus.html';
  include 'header.html';
?>

<!DOCTYPE html>
<html>
  <title>FRIBUS</title>
  <body>
    <!--Intro-->
    <div id="header_image">
      <div class="about">
        <h1 class="w3-center">Chào mừng các bạn đến với Fribus</h1>
        <h3 class="w3-center">Website cung cấp các công cụ hỗ trợ sử dụng dịch vụ xe buýt công cộng</h3>
        <center><img src="image/bus-car.png" class="bus-car" alt=""></center>
      </div>
    </div>

    <!-- Modal -->
    <div class="w3-row-padding w3-center w3-margin-top">
      <div class="w3-third">
        <div class="w3-card-2 w3-padding-top" style="min-height:460px">
          <h4>Tìm kiếm trạm xe buýt</h4><br>
          <a href="busmap.php">
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
          <h4>Đo khoảng cách giữa 2 địa điểm trên bản đồ</h4><br>
          <a href="distance.php">
            <i class="fa fa-map w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          </a>
          <p>Đo khoảng cách nhanh chóng, tiện lợi</p>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
  include 'footer.html';
?>
