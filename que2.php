<!-- Write a php program to:
a) check whether given number is palindrome or not.
b) print sum of digits.
c) print factorial of a number.
d) display text messages.
e) print an array.
f) create a simple calculator
g) find vowel checking a string. -->

<?php
    // a) check whether given number is palindrome or not.

    function palindrome($n){
        $temp = $n;
        $rev = 0;
        while(floor($temp)){
            $d = $temp % 10;
            $rev = $rev * 10 + $d;
            $temp = $temp / 10;
        }
        if($rev == $n){
            echo "Palindrome<br>";
        }
        else{
            echo "Not Palindrome<br>";
        }
    }

    $n = 12321;

    palindrome($n);

    // b) print sum of digits.

    function sum($n){
        $sum = 0;
        while($n > 0){
            $sum += $n % 10;
            $n = $n / 10;
        }
        echo '<br>'.$sum.'<br>';
    }

    $n = 123;

    sum($n);

    // c) print factorial of a number.

    function fact($n){
        $fact = 1;
        for($i = 1; $i <= $n; $i++){
            $fact *= $i;
        }
        echo '<br>'.$fact.'<br>';
    }

    $n = 5;

    fact($n);

    // d) display text messages.

    echo "Hello World<br>";

    // e) print an array.

    $arr = array(1, 2, 3, 4, 5);

    foreach($arr as $a){
        echo $a;
    }

    echo '<br>';
    // f) create a simple calculator

    function calc($a, $b, $op){
        switch($op){
            case '+':
                echo $a + $b;
                break;
            case '-':
                echo $a - $b;
                break;
            case '*':
                echo $a * $b;
                break;
            case '/':
                echo $a / $b;
                break;
            default:
                echo "Invalid Operator";
        }
    }

    $a = 5;
    $b = 2;

    calc($a, $b, '+');
    
    echo '<br>';

    // g) find vowel checking a string.

    function vowel($str){
        $vowels = array('a', 'e', 'i', 'o', 'u');
        $count = 0;
        for($i = 0; $i < strlen($str); $i++){
            if(in_array($str[$i], $vowels)){
                $count++;
            }
        }
        echo $count;
    }

    $str = "Hello World";

    vowel($str);

?>
