<!--Write a PHP script to get the shortest string and longest string length from a given array.-->
<!--Example: array=("Sunil","Kevin","Jay","Gaurav","ArunShahShah","A")-->
<!--Expected Output:-->
<!--The shortest array length is 1.-->
<!--The longest array length is 12.-->

<?php

$array = array("Fenil", "Dhara", "Sahil", "Rohan", "VishvasLathiya", "Om");
$shortest = $array[0];
$longest = $array[0];

foreach ($array as $value) {
    if (strlen($value) < strlen($shortest)) {
        $shortest = $value;
    }
    if (strlen($value) > strlen($longest)) {
        $longest = $value;
    }
}

echo "The shortest array length is " . strlen($shortest) . ".<br>";
echo "The longest array length is " . strlen($longest) . ".<br>";

?>