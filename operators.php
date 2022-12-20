<?php

$a = 10;
$b = 5;

echo "a = $a<br>", "b = $b<br>";

echo "<br><br>";

#Arithmetic Operators
echo "Arithmetic Operators:<br><br>";

echo "1: + , 2: - , 3: * , 4: / , 5: % <br>";

var_dump($a + $b, $a - $b, $a * $b, $a / $b, $a % $b);

echo "<br><br><br>";

#Comparison Operators
echo "Comparison Operators:<br><br>";

echo "1: == , 2: != , 3: < , 4: > , 5: <=, 6: >= <br>";

var_dump($a == $b, $a != $b, $a < $b, $a > $b, $a <= $b, $a >= $b);

echo "<br><br><br>";

#Logical Operators
echo "Logical Operators:<br><br>";

echo "1: && , 2: and , 3: || , 4: or , 5: !, 6: xor <br>";

var_dump($a == 10 && $b == 5, $a == 10 and $b == 5, $a == 10 || $b == 10, $a == 10 or $b == 5, !$a == 5, $a == 10 xor $b == 10);

?>

