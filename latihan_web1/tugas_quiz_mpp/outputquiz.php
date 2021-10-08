<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
</head>
<body bgcolor="gold">
<?php

$nm=$_POST["nm"];
$si=$_POST["si"];
$tl=$_POST["tl"];

if ($si=="111")
{
	$br="Dickies Classic 1998";
	$hr="Rp.180.000";
}
elseif ($si=="222")
{
	$br="Vetements Shellton";
	$hr="Rp.230.000";
}
else
{
	$br="Adidas Track Pants";
	$hr="Rp.85.000";
}
?>
<p><b><?php
echo ("SECOND WEAR STORE");
?></p></b>
<p><?php
echo ("____________________________");
?></p>
<p><?php
echo ("Nama Pembeli : $nm");
?></p>
<p><?php
echo ("____________________________");
?></p>
<p><?php
echo ("Barang : $br");
?></p>
<p><?php
echo ("Total : $tl");
?></p>
<p><?php
echo ("____________________________");
?></p>
<p><?php
$tp=$jb=$hr;
echo ("Harga : $hr");
?></p>
<p><?php
echo ("____________________________");
?></p>

<a href="Inputquiz.php">Add Item</a>
</body>
</html>
