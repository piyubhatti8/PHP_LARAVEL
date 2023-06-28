<html>
<head>
	<title>Conditional Statements</title>
</head>
<body>


<?php 
/*
Conditional statements 

if()
if...else
if...elseif...else
nested if
switch	
*/

echo "<h1><center>Conditional Statement</center></h1>";

echo "<br><h2>If() Condition</h2>";

$a=50;
$b=50;
if($a==$b)
{
	echo "<br>" . $a . " and " . $b . " are equal";
}

echo "<h2>If...else Condition</h2>";

$a1=50;
$b1=40;
$c=10;
if($a1>$b1)
{
	//echo "<br>\$a1=" . $a1 . " is greater than ". $b1 ;
	echo "<br> A is greater than b";
}
elseif($a1>$c)
{
	echo "<br> A is greater than c";
}
else
{
	echo "<br> A is less than b and c";
}

echo "<h2>Nested if Condition</h2>";

?>

</body>

</html>