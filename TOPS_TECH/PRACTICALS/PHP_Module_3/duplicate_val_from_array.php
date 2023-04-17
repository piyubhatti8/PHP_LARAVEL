<?php
$array = array('apple', 'orange', 'pear', 'banana', 'apple',
'pear', 'kiwi', 'kiwi', 'kiwi');

echo "<b>Before removing duplicate values from an array array is:</b><br>";
foreach($array as $a)
{
    print_r($a . ", ");
}
echo "<br><br>";
echo "<b>After removing duplicate values from an array array is:</b><br>";
foreach(array_unique($array) as $b){
    print_r($b . ", ");

}
    




?>