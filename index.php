<!DOCTYPE html>
<!--Write a program to check student grade based on the marks using if-else statement.
Conditions:
✓ If marks are 60% or more, grade will be First Division.
✓ If marks between 45% to 59%, grade will be Second Division.
✓ If marks between 33% to 44%, grade will be Third Division.
✓ If marks are less than 33%, student will be Fail.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//            echo 'Fenil Sonani';
//            $txt = 'Fenil Sonani';
//            $age = 18;
//            $percentage=8.9;
//            echo 'Fenil Sonani age is a '.$age.' Old<br>';
//            echo strlen($txt);
//            echo count_chars($txt);
//            echo str_word_count($txt);
//            echo strpos("Hello World", "World");   
              $marks=22;
              echo gettype($marks);
              
                
            if ($marks>60) {
              echo "First Division!";
            } elseif ($marks>45 && $marks<59) {
              echo "Second Division!";
            } elseif($marks>33 && $marks<33) {
              echo "Third Division!";
            }else {
                echo 'Fail';
            }
        ?>
    </body>
</html>
