<html>
<head>
	<title>Arithmatic Operators.php</title>
</head>
<body>

<?php

echo "<h2>Addition</h2>";
$a=10;
$b=20;
echo "Addition of a and b is: " . $a + $b;
echo "<br>Addition of " . $a . " and " . $b . " is " . $a + $b;

echo "<h2>Subtraction</h2>";
$a1=50;
$b1=20;
echo "Subtraction of " . $a1 . " and " . $b1 . " is " . $a1 - $b1;

echo "<h2>Multiplication</h2>";
$a2=5;
$b2=5;
echo "Multiplication of " . $a2 . " and " . $b2 . " is " . $a2 * $b2;

echo "<h2>Division</h2>";
$a3=10;
$b3=5;
echo "Division of " . $a3 . " and " . $b3 . " is " . $a3 / $b3;

echo "<h2>Modulus</h2>";
$a4=11;
$b4=10;
echo "Modulus of " . $a4 . " and " . $b4 . " is " . $a4 % $b4;

echo "<h2>Area of circle</h2>";
$pi=3.1415;
$radius=5;

echo "PI= ".$pi . "<br>\$PI= " . $pi ;
$area = $pi * $radius * $radius;
echo "<br>Area of a circle is: " . $area;

?>


<body>
</html>
