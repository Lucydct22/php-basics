<?php

$a = 10;
$b = "apples";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br><br>";
echo "Printing a string: <br>";
echo "This is a string<br><br>";

echo "Printing a string with variables: <br>";
echo "I have $a $b in my bag<br><br>";

echo "Concatenating a previously declared variable: <br>";
echo "I have $a " . $b . "<br><br>";

echo "Replace string: 'Hello world!' with Peter instead of world. <br>";
echo str_replace("world","Peter","Hello world!") . "<br><br>";


echo "Replace string: 'Hello World!' with Peter instead of World but putting 'world' as parameter. <br>";
echo str_ireplace("world","Peter","Hello World!") . "<br><br>";

echo "Writing a text N times (5): <br>";
echo str_repeat("Hello<br>", 5) . "<br>";

echo "Get the length of a string (apples): <br>";
echo strlen($b). "<br><br>";

echo "Position of the first occurrence of a text within a text string: <br>";
echo strpos("I love php, I love php too!", "php");

echo "<br><br>";

echo "Capitalize string (hello): <br>";
echo ucfirst("hello world!") . "<br><br>";

echo "Turn to lower case (hellO WORld!): <br>";
echo strtolower("hellO WORld!") . "<br><br>";

echo "Get substring (Hello World! , 3): <br>";
echo substr("Hello World!",3) . "<br><br>";

?>