<!--Write a PHP script that inserts a new item in an array in any position.-->
<!--Expected Output:-->
<!--Original array: 1 2 3 4 5-->
<!--After inserting '$' the array is: 1 2 3 $ 4 5-->


<?php
function insert($array, $item, $position)
{
    $array[] = null;
    for ($i = count($array) - 1; $i >= $position; $i--) {
        $array[$i] = $array[$i - 1];
    }
    $array[$position - 1] = $item;
    return $array;
}

$numbers = [1, 2, 3, 4, 5];
$numbers = insert($numbers, '$', 2);
echo implode(' ', $numbers);
?>