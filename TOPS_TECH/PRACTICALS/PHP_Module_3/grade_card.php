<?php
$physics = 95;
$chemistry = 90;
$biology = 94;
$maths = 93;
$computer = 91;
$total = $physics + $chemistry + $biology + $maths + $computer;
$avg = $total / 5.0;
$percentage = ($total / 500.0) * 100.0;
//echo "Average= $avg" ."<br>";
//echo "Percentage= $percentage" ."<br>";
if($percentage >= 90)
    $grade = 'A';
elseif ($percentage >= 80 && $percentage < 90)
    $grade = 'B';
elseif ($percentage >= 70 && $percentage < 80)
    $grade = 'C';
elseif ($percentage >= 60 && $percentage < 70)
    $grade = 'D';
else
    $grade = 'E';

echo "<center><h1>Student Grade Card</h1><table border=1 width=40% cellspacing=3 cellpadding=15>";
echo "<tr><td><b>The Total Marks:</b></td><td>". $total ."/500</td></tr>";
echo "<tr><td><b>The Average Marks:</b></td><td>". $avg ."</td></tr>";
echo "<tr><td><b>Percentage:</b></td><td>". $percentage ."</td></tr>";
echo "<tr><td><b>Grade</b></td><td>". $grade ."</td></tr></table></center>";








?>