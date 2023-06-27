<html>
    <head>
        <title>Que3</title>
    </head>
    <body>
        <ol>
            <li>factorial of given number</li>
            <li>find given number is prime or not</li>
            <li>reverse string</li>
            <li>sort given array</li>
            <li>check whether a passed string is palindrome or not</li>
            <li>check string is containing number, alphabets, special character</li>
        </ol>

        <form method="POST">
             <input type="number" name="option" id="option" value="6">
             <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            $opt = null;
            $opt=$_POST['option'];
            
            
            echo $opt;
            
            if(!$opt==""){
                
            
            switch ($opt) {
                case 1:
//                    a) factorial of given number
                        $num = 10;
                        $fact = 1;
                        for($i = 1; $i <= $num; $i++){
                            $fact *= $i;
                        }
                        echo '<br>'.$fact.'<br>';
                    break;
                    
                case 2:
//                    find given number is prime or no
                    $newnum=20;
                    if($newnum%2==0){
                        echo 'Number Is a Prime';
                    }else{
                        echo 'Number IS not a Prime';
                    }
                    break;
                
                case 3:
                    $string="Fenil Sonani";
                    // reverse string
                    $revstr=strrev($string);
                    echo '<br>'.$revstr.'<br>';
                    break;
                
                case 4:
                    // sort given array
                    $arr=array(1,3,2,5,4);
                    echo '<br>';
                    foreach ($arr as $value) {
                        echo $value.'<br>';
                    }
                    sort($arr);
                    echo '<br>';
                    foreach ($arr as $value) {
                        echo $value.'<br>';
                    }
                    break;

                case 5:
                    // check whether a passed string is palindrome or not
                    $str="madam";
                    if($str==strrev($str)){
                        echo 'String is Palindrome';
                    }else{
                        echo 'String is not Palindrome';
                    }
                    break;
                    
                case 6:
                    // check string is containing number, alphabets, special character
                    $str="Fenil Sonani";

                    if(preg_match('/[A-Za-z]/', $str)){
                        echo 'String Contains Alphabets';
                    }elseif(preg_match('/[0-9]/', $str)){
                        echo 'String Contains Number';
                    }elseif(preg_match('/[^A-Za-z0-9]/', $str)){
                        echo 'String Contains Special Character';
                    }
                    break;

                default:
                    echo 'Invalid Input';
                    break;
            }
            }
        ?>
    </body>
</html>
