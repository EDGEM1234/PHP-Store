<?php
echo "PHP ***Numeric Array*** Example";
echo "<br>";
echo " ------------Ist method ------------------ ";
echo "<br>";
$luxuryCars = array(
 "Volvo",
 "Audi,",
 "Ferrari"
);
echo "I would like to have " . $luxuryCars[0] . ", " . $luxuryCars[1] . " and " . $luxuryCars[2] . ".";
echo "<br>";
echo "<br>";
echo " ------------2nd method ------------------ ";
echo "<br>";
$luxuryCars[0] = "Volvo";
$luxuryCars[1] = "Audi,";
$luxuryCars[2] = "Ferrari";
echo "I would like to have " . $luxuryCars[0] . ", " . $luxuryCars[1] . " and " . $luxuryCars[2] . ".";
?>