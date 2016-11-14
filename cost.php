<?php
  include 'stdfribus.html';
  include 'header.html';
?>

<!DOCTYPE html>
<html>
  <title>Tính tiền</title>
  <link rel="stylesheet" href="css/cost.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://material.angularjs.org/1.1.0/angular-material.css">
  <body ng-app="BlankApp" ng-cloak>
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
	  angular.module('BlankApp', ['ngMaterial']);
	</script>
  </body>
</html>

<?php
  include 'footer.html';
?>
