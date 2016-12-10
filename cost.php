<?php
  include 'stdfribus.html';
  include 'header.html';
?>

<!DOCTYPE html>
<html>
  <title>Tính tiền</title>
  <link rel="stylesheet" href="css/cost.css">
  <body>
    <div style="padding: 20px;">
      <h1 class="w3-center">Tính chi phí</h1>
    </div>

    <div style="width: 500px; margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 100px;">
      <form action="" method="POST" id="frm-cost">
        <div class="including">
          <center id="input-box">
            <div style="width: 75%;" id="box1">
              <input type="number" name='km1' class="w3-input" placeholder="Trạm 1">
            </div>
          </center>
        </div>
        <div class="including">
          <div style="float:left; width: 40%;">
            <button type="submit" class="w3-btn w3-green btn-cost" name="submit">Xác nhận</button>
          </div>
          <div style="float:right; width: 40%;">
            <button type="button" class="w3-btn w3-green btn-cost" onclick="add_box()">Thêm trạm</button>
          </div>
        </div>
      </form>

      <?php
        $km = 0;
        $cost = 0;
        $get_input = false;
        for ($i = 1; isset($_POST['km' . (string) $i]); ++$i){
          $km = $_POST['km' . (string) $i];
          if ($km > 0 && $km < 43){
            $get_input = true;
            $cost += (int) ($km / 42) * 17000;
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
          }
          else echo "<script>alert('Số km buộc phải lớn hơn 0 và nhỏ hơn 43');</script>";
        }

        if ($get_input) echo "<script>alert('Chi phí cần là: $cost VND');</script>";
      ?>
    </div>
    <script>
      var i = 2;
      function add_box(){
        var div_box = document.createElement("div");
        var box = document.createElement("input");

        div_box.setAttribute("style", "width: 75%;");
        div_box.setAttribute("id", "box" + i);
        box.setAttribute("type", "number");
        box.setAttribute("name", "km" + i);
        box.setAttribute("class", "w3-input");
        box.setAttribute("placeholder", "Trạm " + i);

        document.getElementById("input-box").appendChild(div_box);
        document.getElementById("box" + i).appendChild(box);
        
        console.log(div_box);
        console.log(box);
        ++i;
      }  
    </script>
  </body>
</html>

<?php
  include 'footer.html';
?>