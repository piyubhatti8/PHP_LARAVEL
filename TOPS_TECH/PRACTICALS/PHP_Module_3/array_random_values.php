
<?php
$arr = array("Hema","Shweta","Mohan","Kanika");

echo "<b>Array:- ( </b>";
foreach ($arr as $a) {
echo $a .", ";
}

echo ")";
echo "<br>";

echo "<br><br><b>" . $arr[array_rand($arr)] . "</b>";

?>