<?php 
	$money = $_POST["money"];
	$sakun = $_POST["sakun"];
	$sakun2 = $_POST["sakun2"];
	$moneyprang;
	if($sakun == "THB"){
		if($sakun2 == "USD"){
			$moneyprang=$money*0.03;
		}
		else if($sakun2 == "JPY"){
			$moneyprang=$money*3.23;
		}
		else if($sakun2 == "CAD"){
			$moneyprang=$money*0.04;
		}
	}
	else if($sakun == "USD"){
		if($sakun2 == "THB"){
			$moneyprang=$money*34.9;
		}
		else if($sakun2 == "JPY"){
			$moneyprang=$money*113.1;
		}
		else if($sakun2 == "CAD"){
			$moneyprang=$money*1.31;
		}
	}
	else if($sakun == "JPY"){
		if($sakun2 == "THB"){
			$moneyprang=$money*0.31;
		}
		else if($sakun2 == "USD"){
			$moneyprang=$money*0.008;
		}
		else if($sakun2 == "CAD"){
			$moneyprang=$money*0.01;
		}
	}
	else if($sakun == "CAD"){
		if($sakun2 == "THB"){
			$moneyprang=$money*26.7;
		}
		else if($sakun2 == "USD"){
			$moneyprang=$money*0.76;
		}
		else if($sakun2 == "JPY"){
			$moneyprang=$money*86.38;
		}

	}
	
 ?>
 <html>
 <head>
 	<title>แปลงสกุลเงิน</title>
 	<link rel="stylesheet" type="text/css" href="css/style99.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
 </head>
 <body>
 	<div class="main02 margintop tr tl animated bounceInLeft">
 		<div class="money03"><?php  echo $money;?></div>
 		<div class="sakun03"><?php echo $sakun ?></div>
 	</div>
 	<div class="abcd animated bounceInRight">เท่ากับ</div>
 	<div class="main02 br bl animated bounceInLeft">
 		<div class="money03"><?php  echo $moneyprang;?></div>
 		<div class="sakun03"><?php echo $sakun2 ?></div>
 	</div>
 	<div class="main02-1 animated bounceInDown">
 		<a href="index.php">
 			<div class="btn-backhome">กลับสู่หนัาหลัก</div>
 		</a>
 	</div>
 </body>
 </html>