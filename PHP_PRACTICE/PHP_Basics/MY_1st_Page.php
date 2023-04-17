<html>
<head>
	<title>My First PHP page</title>
</head>
<body>


<?php 


echo "My first PHP page <br><br>";

echo "<B>String Concatination using comma(,).</b><br>";
echo "First string"," second string";
echo "<br>";

$str1="String variable1";
$str2="String variable2";

echo $str1, " " ,$str2;

echo "<br><br><u><B>String to other data type concatination using dot(.) </b></u><br><br>	";
$a=10;
$b=5;

echo "Addition of a and b is: " . $a + $b;
echo "<br><b>Printing with values</b>";
echo "<br>Addition of " . $a . " and " . $b . " is " . $a + $b;
?>

</body>

</html>