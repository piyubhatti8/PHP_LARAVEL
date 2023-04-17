


<?php
 $add = 4;
$n=0;
for ($i = 1; $i <= 4; $i++)
{
    
    if($i!=1)
        echo $i . " ";

    $n= $i + $add; 
    for($j=1; $j<3; $j++){
        echo $n . " ";
        $n = $n + $add;
       
       
    }

    echo "<br>";
    

    

}


/* for($i=1;$i<=4;$i++)

{

echo $i." ";

$add_var=4;

for($j=1;$j<3;$j++)

{

echo $temp=$i+$add_var." ";

$add_var=$add_var+4;

}

echo "<br>";

}*/
?>