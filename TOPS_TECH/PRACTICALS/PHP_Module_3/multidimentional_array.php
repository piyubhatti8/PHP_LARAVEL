<?php

$mul_array = array(
array("Gita",10000.0,200.0,123.5,1500.7),
array("Rita",5000.0,100.0,564.1,2500.0),
array("Mita",4000.0,300.0,684.0,1000.0),
);

for ($row = 0; $row < 3; $row++) {
    
    echo "<b><br>Row - $row </b>";

    for ($col = 0; $col < 5; $col++) {
        echo "<br>";
        echo $mul_array[$row][$col];

    }
    echo "<br>";
    
}
//print_r($mul_array);

?>