<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

$Item1Cost=1;
$Item2Cost=5;
$Item3Cost=1000;

$Name=$_POST["name"];
$Pass=$_POST["pass"];
$Item1=$_POST["Item1"];
$Item2=$_POST["Item2"];
$Item3=$_POST["Item3"];
$Shipping=$_POST["Ship"];

if($Shipping=="7 Day Free"){
	$Shipping_Cost=0;
}
elseif($Shipping=="3 Day Express"){
	$Shipping_Cost=5;
}
else{
	$Shipping_Cost=50;
}



?>
<h1>Thanks for the order, <?php echo $Name ?><br></h1>
Acct info: <br>
Name: <?php echo $Name ?><br>
Pass: <?php echo $Pass ?><br>
<br>
Recipt:<br>
<table class="border">
	<tr class="border top">
		<th class="border"></th>
		<th class="border">Quantity</th>
		<th class="border">Cost Per Item</th>
		<th class="border">Sub Total</th>
	</tr>
	<tr class="border middle">
		<th class="border">Consonants</th>
		<th class="border"><?php echo $Item1 ?></th>
		<th class="border"><?php echo $Item1Cost ?></th>
		<th class="border">$<?php echo ($Item1*$Item1Cost) ?></th>
	</tr>
	<tr class="border middle">
		<th class="border">Vowels</th>
		<th class="border"><?php echo $Item2 ?></th>
		<th class="border"><?php echo $Item2Cost ?></th>
		<th class="border">$<?php echo ($Item2*$Item2Cost) ?></th>
	</tr>
	<tr class="border middle">
		<th class="border">Special Characters</th>
		<th class="border"><?php echo $Item3 ?></th>
		<th class="border"><?php echo $Item3Cost ?></th>
		<th class="border">$<?php echo ($Item3*$Item3Cost) ?></th>
	</tr>
	<tr class="border shipping">
		<th class="border">Shipping</th>
		<th class="border" colspan="2"><?php echo $Shipping ?></th>
		<th class="border">$<?php echo $Shipping_Cost ?></th>
	</tr>
	<tr class="border total">
		<th class="border" colspan="3" ><b>Total Cost</b></th>
		<th class="border">$<?php echo (($Item1*$Item1Cost)+($Item2*$Item2Cost)+($Item3*$Item3Cost)+$Shipping_Cost) ?></th>
	</tr>

</body>
</html>
