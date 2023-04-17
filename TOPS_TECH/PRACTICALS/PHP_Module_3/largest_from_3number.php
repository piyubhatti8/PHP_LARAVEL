<?php
function largest($a , $b, $c){

$max=($a > $b) ? (($a > $c) ? $a :$c) : (($b > $c) ? $b : $c);
echo "Largest number among $a ,$b and $c is $max";
    echo "<br>";  
}

largest(100,50,25);
largest(10,50,25);
largest(10,50,225);
?>