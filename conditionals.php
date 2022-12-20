<?php

#Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.

$t = date("Mon");

if (date("D") == $t) {
echo "We are on Monday";
}

else {
echo "Today is not Monday";
}
echo "<br><br>";

#Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.


$m = date("October");

if (date("F") == $m) {
echo "We are in October";
}

else {
echo "Today is&nbsp", date("F");
}
echo "<br><br>";

#Create a double condition that evaluates:
#If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”


if (date("i") < 10) {
    echo "the current minute is less than 10";
    }
else if (date("i") > 15) {
    echo "the current minute is more than 15";
}

else {
echo "does not meet any conditions";
}
echo "<br><br>";

#Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.

$d = date("D");

switch ($d) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo " Today is Wednesday";
        break;
    case "Thu":
        echo " Today is Thursday";
        break;
     case "Fri":
        echo " Today is Friday";
        break;
    case "Sat":
        echo " Today is Saturday";
        break;
    case "Sun":
        echo " Today is Sunday";
        break;
    }

?>

