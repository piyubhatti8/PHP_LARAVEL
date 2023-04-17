<?php
$arr = array(2,4,1,6,5);
$sum = 0;
for ($i = 0; $i <= 4; $i++) {

$sum = $sum + $arr[$i];
}
echo "<b>Array:- ( </b>";
foreach ($arr as $a) {
    echo  $a . ", ";
}
echo ")";

echo "<br><br>Sum of an array values: <b>" . $sum . "</b>";

?>