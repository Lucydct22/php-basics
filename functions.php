<?php

# + FUNCTION
function addTwoNumbers(int $x, int $y)
{
    return $x + $y;
}

echo " sum of 10 and 25 : " . addTwoNumbers(10, 25);
echo "<br>";

# MULTIPLY TWO NUMBER WHIT bcmul
$num_str1 = "3";
$num_str2 = "5";

$multiply = bcmul($num_str1, $num_str2);

echo $multiply;

#DIVIDE TWO NUMBERS

$numa = 16;
$numb = 1.5;
echo "<p>The  value of variables is $numa &  $numb<p>";
$resul = $numa % $numb;
echo "<p>The modulus of these numbers  is $resul<p>";

#ADD DIVIDE OR MULTIPLY

$x=30;
$y=41;
echo "Multiplication of x and y : ". ($x*$y) ."<br />";
?>
