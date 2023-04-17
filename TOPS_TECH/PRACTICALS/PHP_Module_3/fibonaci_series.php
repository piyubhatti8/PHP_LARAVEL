<?php
$n=34;
$num = 0;
$n1 = 1;
$n2 = 2;
echo $num . "  ";
echo $n1 . "  ";
echo $n2 . "  ";

while ($num <= $n) {
    $n3 = $n2 + $n1;
    echo $n3 . "  ";
    $n1 = $n2;
    $n2 = $n3;
    $num++;


}

?>