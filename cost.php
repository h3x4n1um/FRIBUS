<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="http://icons.iconarchive.com/icons/graphicloads/polygon/128/bus-icon.png">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-green.css">
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
</html>

<!DOCTYPE html>
<html>
  <body>
    <!-- Header -->
    <header class="w3-container w3-theme w3-padding" id="myHeader">
      <div class="w3-center">
        <h4>CHÀO MỪNG BẠN ĐẾN VỚI</h4>
        <a href="index.php">
          <h1 class="w3-xxxlarge w3-animate-bottom">FRIBUS</h1>
        </a>
        <div class="w3-padding-32">
          <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">ĐĂNG NHẬP</button>
        </div>
      </div>
    </header>

    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-8 w3-animate-top">
        <header class="w3-container w3-theme-l1">
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">×</span>
          <h4>Chưa có gì hết :)</h4>
          <h5>Đây mới là demo thôi <i class="fa fa-smile-o"></i></h5>
        </header>
        <div class="w3-padding">
          <p>Tuyệt không?</p>
        </div>
        <footer class="w3-container w3-theme-l1">
          <p>Beta version</p>
        </footer>
      </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
  <title>Tính tiền</title>
  <link rel="stylesheet" href="css/cost.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://material.angularjs.org/1.1.0/angular-material.css">
  <body ng-app="FRIBUS cost" ng-cloak>
    <center>
      <div id="box">
        <form action="" method="POST" id="frm-cost">
          <div id="sokm">
            <md-input-container>
              <label>Nhập số km</label>
              <input type="text" name ='km' ng-model="user.postalCode">
            </md-input-container>
            <button type ="submit" class="w3-btn w3-green btn-cost" name="submit">Xác nhận</button>
          </div>
        </form>
        <?php
          $km = '';
          $cost = 0;
          if (isset($_POST['km'])){
            $temp = $_POST['km'];
            $km = (int) $temp;
            if (strlen($km) != strlen($temp) || ($temp != '0' && $km == 0)){
              echo "<script>alert('$temp không phải là số!');</script>";
            }
            else{
              $cost = (int) ($km / 42) * 17000;
              $km = $km % 42;
              if ($km >= 1 && $km <=3) $cost += 4000;
              if ($km > 3 && $km <= 6) $cost += 5000;
              if ($km > 6 && $km <= 9) $cost += 6000;
              if ($km > 9 && $km <= 12) $cost += 7000;
              if ($km > 12 && $km <= 15) $cost += 8000;
              if ($km > 15 && $km <= 18) $cost += 9000;
              if ($km > 18 && $km <= 21) $cost += 10000;
              if ($km > 21 && $km <= 24) $cost += 11000;
              if ($km > 24 && $km <= 27) $cost += 12000;
              if ($km > 27 && $km <= 30) $cost += 13000;
              if ($km > 30 && $km <= 33) $cost += 14000;
              if ($km > 33 && $km <= 36) $cost += 15000;
              if ($km > 36 && $km <= 39) $cost += 16000;
              if ($km > 39 && $km <= 42) $cost += 17000;
              if ($km <= 0) echo "<script>alert('Số km buộc phải lớn hơn hoặc bằng 1');</script>";
              else echo "<script>alert('Chi phí cần là: $cost VND');</script>";
            }
          }
        ?>
      </div>
    </center>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

    <!-- Your application bootstrap  -->
    <script type="text/javascript">
      /**
      * You must include the dependency on 'ngMaterial' 
      */
      angular.module('FRIBUS cost', ['ngMaterial']);
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <body>
    <!-- Footer -->
    <footer class="w3-container w3-theme w3-padding-16">
      <a href="index.php">
        <h3>FRIBUS</h3>
      </a>
      <p>Được tạo bởi </p>
      <p><a href="https://www.facebook.com/h3x4n1um" target="_blank">Nguyễn Thanh Hoàng Hải</a></p>
      <p><a href="https://www.facebook.com/jin.st742" target="_blank">Võ Nguyễn Trường Dĩ</a></p>
      <p><a href="https://github.com/oobol2000oo/FRIBUS" target="_blank">Source Code</a></p>
      <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
        <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
      </div>
    </footer>
  </body>
</html>
