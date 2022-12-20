<?php

#Generate an instruction that makes use of "echo"

$x = 5; 
$y = 4; 
echo "$x + $y = ".($x + $y);
"<br><br>";

#Generate an instruction that makes use of "print"


echo "Hello ", isset($name) ? $name : "Lucy", "!";
echo "Sum: ", 1 + 2;
"<br><br>";

#Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
"<br><br>";

?>