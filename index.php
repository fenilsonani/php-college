<!--code that will take 5 input marks fromt the user and display the avarayge and also show the percentage of the marks-->
<!--and assign grade-->
<!--Conditions:-->
<!--✓ If marks are 60% or more, grade will be First Division.-->
<!--✓ If marks between 45% to 59%, grade will be Second Division.-->
<!--✓ If marks between 33% to 44%, grade will be Third Division.-->
<!--✓ If marks are less than 33%, student will be Fail.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Grade</title>
</head>
<body>

<form action="que1.php" method="POST">
    <input type="number" name="num1" placeholder="Enter first number">
    <br>
    <input type="number" name="num2" placeholder="Enter second number">
    <br>
    <input type="number" name="num3" placeholder="Enter third number">
    <br>
    <input type="number" name="num4" placeholder="Enter fourth number">
    <br>
    <input type="number" name="num5" placeholder="Enter fifth number">
    <br>
    <input type="submit" name="submit" value="Add">
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $sum = $num1 + $num2 + $num3 + $num4 + $num5;
    $avg = $sum / 5;
    $percentage = ($sum / 500) * 100;
    echo "The Total Of Marks is: ".$sum;
    echo "<br>";
    echo "The Avarage Marks is: ".$avg;
    echo "<br>";
    echo "The Percentage: ".$percentage;
    echo "<br>";
    if($percentage >= 60){
        echo "First Division";
    }elseif ($percentage >= 45 && $percentage <= 59){
        echo "Second Division";
    }elseif ($percentage >= 33 && $percentage <= 44){
        echo "Third Division";
    }else{
        echo "Fail";
    }

}

?>
