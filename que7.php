<!--Write a PHP script to perform searching functionality from multi-dimensional array based on-->
<!--user inputted value.-->
<!--[Note: Multi-dimensional array has at least 3 x 3 and array value initialize array randomly]-->

<?php

$array = array(
    array("Fenil", "Dhara", "Sahil"),
    array("Rohan", "VishvasLathiya", "Om"),
    array("Sunil", "Kevin", "Jay")
);

$flag = 0;

if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    foreach ($array as $value) {
        foreach ($value as $value1) {
            if ($value1 == $search) {
                echo "Found";
                $flag = 1;
                break;
            }
        }
    }
    if ($flag == 0) {
        echo "Not Found";
    }
}

?>


<form method="post">
    <input type="text" name="search">
    <input type="submit" name="submit" value="Search">
</form>
