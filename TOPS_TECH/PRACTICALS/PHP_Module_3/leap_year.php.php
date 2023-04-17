<?php


$start=1901;
$end=2016;

for($start;$start<=$end;$start++)
{
    if ($start % 400 == 0)
    {
        echo $start . " is leap year<br>";
    }
    elseif ($start % 4 == 0)
    {
        echo $start . " is leap year<br>";
    } elseif ($start % 100 == 0)
    {
        echo $start . " is not leap year<br>";
    }
    else
    echo $start . " is not leap year<br>";

}


?>