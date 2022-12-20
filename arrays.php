<?php

echo "Regular array with strings: <br>";
$arrayStrings = array("apple", "pear", "banana");
print_r($arrayStrings);
echo "<br><br>";

echo "Regular array with numbers: <br>";
$arrayNums = array(1, 2, 4.1231);
print_r($arrayNums);
echo "<br><br>";

echo "Multidimensional array: <br>";
$arrayMultiDim = array(array("Volvo", 1), array("Seat", 2), array("Porsche", 0));
print_r($arrayMultiDim);
echo "<br><br>";

echo "Length of array: <br>";
echo count($arrayStrings);
echo "<br><br>";

echo "Combination of two arrays: <br>";
print_r(array_merge($arrayStrings, $arrayNums));
echo "<br><br>";

echo "Return last element of array: <br>";
echo (end($arrayNums)) . "<br><br>";

echo "Add element to array (2, 4): <br>";
array_push($arrayStrings, 2, 4);
print_r($arrayStrings);
?>

