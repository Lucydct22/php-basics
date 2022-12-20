<?php
#absolute value
$a = 10;
$b = 5.8;
var_dump(abs($a - $b));
var_dump(abs($a - 5));
echo "<br><br>";
#rounded
var_dump(round($a - 1.5));
var_dump(round($b - $a));
echo "<br><br>";
#highest value
echo "this is highest&nbsp", max($a, $b, -15, -50, -300);
echo "<br><br>";
#lowest value
echo "this is lowest&nbsp", min($a, $b, 15, 50, 300);
echo "<br><br>";

#random number
echo rand($a, $b);
?>