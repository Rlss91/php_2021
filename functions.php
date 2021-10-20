<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    
</head>
<body>
    <div>
    <?php 
    

        function helloWord(){
            $i = 0;
            echo "hello world from function!<br />";

        }
        $i = 1;

        helloWord();

        echo "<br />";
        echo $i;
        echo "<hr />";

        function calc($a, $b){
            if(!is_numeric($a) || !is_numeric($b))
                return null;
            return $a+$b;
        }

        function emptyFunction(){}
        if(emptyFunction() == null)
            echo "null";
        echo '<br />';
        $resolt = calc('15',15);
        if(is_null($resolt))
            echo "one of parameters is not valid";
        else
            echo $resolt; 
        
        echo "<hr />";

        $globalData = 5;
        function incGlobalData(){
            global $globalData;
            $globalData++;
        }
        incGlobalData();
        echo $globalData;

        echo "<hr />";

        $a = 5;
        $b = 6;

        function swap(&$a, &$b){
            $temp = $a; //temp = 5, a = 5, b = 6
            $a = $b;    //temp = 5, a = 6, b = 6
            $b = $temp; //temp = 5, a = 6, b = 5
        }
        swap($a, $b);
        echo "a: ".$a." b: ".$b;

        echo "<hr />";
        function calc2($a = 0, $b = 0, $c = '+'){
            if($c == '+'){
                return $a + $b;
            }
            if($c == '-'){
                return $a - $b;
            }
            //*
            //-
        }
        echo calc2($a, $b);
        echo "<br />";
        echo calc2();

        echo "<hr />";
        $anonimusFuncion = function (){
            echo "anonimusFuncion";
        };
        $anonimusFuncion();
        echo "<br>";
        $printCalc = function ($a, $b, $c, $d){
            echo $a . $c . $b . '=' . $d;
        };
        function calcAndPrint($a, $b, $c, $printCalc){
            $d = calc2($a, $b, $c);
            $printCalc($a, $b, $c, $d);
        };
        calcAndPrint(3, 4, '+', $printCalc);
        echo "<hr />";
        (function(){
            echo "function run it self";
        })();
        echo "<hr />";
        $useExample = function() use(&$a, &$b){
            $temp = $a; //temp = 5, a = 5, b = 6
            $a = $b;    //temp = 5, a = 6, b = 6
            $b = $temp; //temp = 5, a = 6, b = 5
        };
        $useExample();
        echo "a: ".$a." b: ".$b;
        echo "<hr />";
        function reqursive($n){
            echo $n;
            echo "<br />";
            if($n > 0){
                reqursive($n-1);
            }
            return 0;
        }
        reqursive(5);
        echo "<hr />";
        function returnFunction(){
            return function($b){
                echo "value is ".$b;
            };
        }
        returnFunction()(5);
    ?>
    </div>
</body>
</html>