<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
    <style>
        html, body{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php 

        $a = 5;
        $b = 5;
        $c = '5';
        $O = 0;

        if($a == $b){
            echo 'a == b';
        }
        echo "<br />";
        if($a === $c){
            echo 'a === c';
        }
        echo "<br />";
        if($a){
            echo "a";
        }
        echo "<br />";
        if($O){
            echo "O";
        }
        echo "<br />";
        if($a <=> $b){
            echo 'a <=> b';
        }
        echo "<hr />";

        if($a == $b){
            echo 'a == b';
        } else {
            echo 'a != b';
        }
        echo "<br />";
        if($a === $c){
            echo 'a === c';
        } else {
            echo 'a !== c';
        }
        echo "<br />";
        if($a){
            echo "a";
        } else {
            echo "!a";
        }
        echo "<br />";
        if($O){
            echo "0";
        } else {
            echo "1";
        }
        echo "<br />";
        if($a <=> $b){
            echo 'a <=> b';
        } else {
            echo '!(a <=> b)';
        }
        echo "<hr />";

        if($a == 1){
            echo "1";
        } elseif ($a == 2){
            echo "2";
        }
        elseif ($a == 3){
            echo "3";
        } else {
            echo ">3 or <1";
        }
        echo "<hr />";
        if($a >= 5 && $b >= 5){
            echo "it is";
        }
        echo "<br />";
        if($a >= 5 AND $b >= 5){
            echo "it is";
        }
        echo "<br />";
        if($a >= 5 || $b < 5){
            echo "it is";
        }
        echo "<br />";
        if($a >= 5 OR $b < 5){
            echo "it is";
        }
        echo "<br />";
        if($a == 5 XOR $a != 5){
            echo "XOR";
        }
        echo "<br />";
        if($a == 5 ^ $a != 5){
            echo "XOR";
        }
        echo "<hr />";
        echo ($a == 5 ^ $a != 5)?"XOR":"";
        echo "<br />";
    ?>
</body>
</html>