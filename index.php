<!DOCTYPE html>
<html>
<head>

	<title>แปลงสกุลเงิน</title>
	<link rel="stylesheet" type="text/css" href="css/style99.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
</head>
<body>
<div class="head-text01 animated bounceInLeft">โปรแกรมแปลงค่าสกุลเงิน</div>
<div class="main01 animated bounceInDown">
<form method="POST" action="p1.php">
	<input type="text" name="money" class="inputmoney" placeholder="ระบุจำนวนเงิน"><br>
	<select name="sakun" class="sakun-style01">
		<option value="THB"> ไทยบาท (THB) </option>
		<option value="USD"> สหดอลลาร์สหรัฐอเมริกา (USD) </option>
		<option value="JPY"> เงินเยนของญี่ปุ่น (JPY) </option>
		<option value="CAD"> ดอลลาร์แคนาดา (CAD) </option>
	</select><br>
	<div class="arrowdown">แปลงเป็น</div><br>
	<select name="sakun2" class="sakun-style01">
		<option value="USD"> สหดอลลาร์สหรัฐอเมริกา (USD) </option>
		<option value="JPY"> เงินเยนของญี่ปุ่น (JPY) </option>
		<option value="CAD"> ดอลลาร์แคนาดา (CAD) </option>
		<option value="THB"> ไทยบาท (THB) </option>
	</select><br>
	<input type="submit" class="sub01"></button>
</form>

</div>
</body>
</html>