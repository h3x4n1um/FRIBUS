<!DOCTYPE html>
<html>
	<link rel="icon" href="http://icons.iconarchive.com/icons/graphicloads/polygon/128/bus-icon.png">
	<link rel="stylesheet" type="text/css" href="css/cost.css" />
	<head>
		<meta charset="utf-8">
		<title> Tính tiền </title>
	</head>
	<body>
		<center>
			<div id="box">
			<form action="" method="POST">
				<div id="sokm">
					Nhập số Km:
					<input type ='text' name ='km' placeholder="Số Km"></input>
					<button type ="submit" name="submit">Xác nhận</button>
				</div>
			</form>
			<?php
				$km = '';
				$cost = 0;
				if (isset($_POST['km']))
				{
					$km = (int) $_POST['km'];
					if (strlen($km) != strlen($_POST['km'])){
						echo "Vui lòng không nhập kí tự";
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
						if ($km <= 0) echo "Vui lòng nhập lại lớn hơn 1 Km" ;
						else echo "Chi phí cần là: " . $cost . " VNĐ";
					}
				}
			?>
			</div>
		</center>
		<script language="javascript">
			document.onmousedown=disableclick;
			status="Anti view source of page :)";
			function disableclick(event){
				if(event.button==2){
				alert(status);
				return false;
				}
			}
		</script>
	</body>
</html>
