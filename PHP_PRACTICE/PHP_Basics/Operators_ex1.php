<html>
<head>
	<title>PHP Operators</title>
</head>
<body>


<?php 
echo "<h2>Arithmatic Operator</h2>";
$a=11;
$b=20;
$sum = $b + $a;
echo $sum;

echo "<br><h2>Assignment Operator</h2>";

$a1=10;
$b1=5;
echo $a1 += $b1;
//$a1=$a1 + $b1;
//echo "<br>" . $a1;

echo "<br><h2>Increament/Decreament Operator</h2>";
$inc=15;
$inc++;
echo "Increamented Value of inc++ is: " . $inc;
$dec=15;
$dec--;
echo "<br>Decreamented Value of dec-- is: " . $dec;

echo "<br><h2>Comparision Operator</h2>";
$a2=100;
$b2=110;

if($a2==$b2)
{
	echo "<br>" . $a2 . " and " . $b2 . " both are same";
}
else
	echo "<br>" . $a2 . " and" . $b2 . " both are different";

echo "<br><br><b>Comparing the data type of variables</b>";
$a3=110;
$b3=110;

if($a3===$b3)
{
	echo "<br>Both variables have same data type.";
}
else
	echo "<br>Both variables have different data type.";


echo "<br><h2>Logical Operator</h2>";
$a4=10;
$b4=15;
$c=2;

if($a4<$b4 && $a4>$c)
{
	echo "<br>" . $a4 . " is less than " . $b4 . " and greater than " . $c ;
}	
else 
	echo "Both conditions are not satisfied.";

echo "<br><h2>String Operator</h2>";
$str="Priyanka";
echo "Hello " . $str . "<br>";

$str.= " S";
echo "Hello " . $str . "  <b>Append Middlename</b><br>";

$str.= " Solanki";
echo "Hello " . $str . "   <b>Append Lastname</b><br>";

echo "<br><h2>Conditional/turnory Operator</h2>";

$age=18;

if($age>=18)
{
	echo "<br>Age is/or above 18";
}
else
		echo "<br>Age is under 18";
	
echo "<br><b>Using turnory operator</b><br>";

$age=10;
echo ($age>=18) ? "Age is/or above 18" : "Age is under 18";

	
	
?>

</body>

</html>