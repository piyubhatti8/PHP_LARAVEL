<?php
function is_armstrong($n)
{
    $sum = 0;
    $x = $n;
    while($x!=0){
        $rem=$x % 10;
        $sum = $sum + $rem * $rem * $rem;
        $x = $x / 10;
       
    }
    if ($sum == $n)
        echo "$n is an armstrong number.";
    else
        echo "$n is not an armstrong number.";
}
is_armstrong(3711);
?>