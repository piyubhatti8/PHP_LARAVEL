<html>
<head>
	<title>Conditional Statements</title>
</head>
<body>


<?php 

echo "<h1><center>Looping Construct</center></h1>";

echo "<br><h2>While Loop</h2>";
$i=1;
While($i<=10)
{
	echo $i . " ";
	$i++;
}

echo "<br><h2>Do While Loop</h2>";
$i=1;

do{
echo $i . " ";
	$i++;
}
While($i>=10);



echo "<br><h2>For Loop</h2>";	

for($i=1;$i<=5;$i++)
{
	echo $i . " ";
}
echo "<br><b>Reverse Loop</b><br>";
for ($j=10;$j>=1;$j--)
{
	echo $j . " ";
}


echo "<br><b>Break</b><br>";	

for($i=1;$i<=10;$i++)
{
	if($i==5)
	{
		break;
		echo "<br>";
	}
	
	echo  $i . " ";
}


echo "<br><b>Continue</b><br>";	

for($i=1;$i<=10;$i++)
{
	if($i==5)
	{
		continue;
		echo "<br>";
	}
	if($i==9)
	{
		continue;
		echo "<br>";
	}
	
	echo  $i . " ";
}

?>

</body>

</html>