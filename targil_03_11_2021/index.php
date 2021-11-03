<?php
    $checkFromCookie = false;
    function chooseRandomNumber($value){
        // $res = rand(rand(0, $value), rand($value+1, $value+10));
        $res = rand(0, $value+rand(1,10));
        if($value == $res){
            $res -= 1;
        }
        return $res;
    }
    if(isset($_COOKIE['checkFromCookie'])){
        $checkFromCookie = true;
        $a = $_COOKIE['avalue'];
        $b = $_COOKIE['bvalue'];
        $char = $_COOKIE['char'];
        $length = $_COOKIE['length'];
        $answerArr = [];
        for($i=0;$i<$length;$i++){
            $answerArr[] = $_COOKIE["answerArr$i"];
        }
        $aaindex = $_COOKIE['aaindex'];
        $selectedIndex = $_COOKIE['selectedIndex'];
        setcookie("checkFromCookie", '', time()-1);
    } else {
        $a = rand(1,100);
        $b = rand(1,100);
        $c = rand(1,4);//+-*/
        $char = '+';//1
        $correctanswer = $a+$b;
        switch($c){
            case 2:
                $char = '-';//2
                $correctanswer = $a-$b;
                break;
            case 3:
                $char = '*';//3
                $correctanswer = $a*$b;
                break;
            case 4:
                $char = '/';//4
                $correctanswer = $a/$b;
                break;
        }
        $answerArr = [
            $correctanswer,//0
            chooseRandomNumber($correctanswer),//1
            chooseRandomNumber($correctanswer),//2
            chooseRandomNumber($correctanswer)//3
        ];
        $aaindex = rand(0,count($answerArr)-1);//0-3
        $tmp = $answerArr[0];
        $answerArr[0] = $answerArr[$aaindex];
        $answerArr[$aaindex] = $tmp;

        setcookie("avalue", $a, time()+3600);
        setcookie("bvalue", $b, time()+3600);
        setcookie("char", $char, time()+3600);
        setcookie("correctanswer", $correctanswer, time()+3600);
        setcookie("aaindex", $aaindex, time()+3600);
        setcookie("length", count($answerArr), time()+3600);
        $i=0;
        foreach($answerArr as $value){
            setcookie("answerArr$i", $value, time()+3600);
            $i++;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 03-11-2021</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .hidden{
            display: none;
        }
    </style>
    <script src="index.js"></script>
</head>
<body>
    <div class="container">
        <form action="check.php" method="post">
            <div class="card">
                <div class="card-header">
                    Question
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?=($a.' '.$char.' '.$b.' =')?>
                    </h5>
                    <p class="card-text">Please choose the right answer</p>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="list-group">
            <!-- <button type="button" class="list-group-item list-group-item-action active">
                Cras justo odio
            </button> -->
                <?php
                    $i=0;
                    foreach($answerArr as $value){
                        echo "<input type=\"radio\" name=\"ans$i\" id=\"ans$i\" value=\"$value\" class=\"hidden\">";
                        $colorClass = "";
                        if($checkFromCookie){
                            if($selectedIndex == $i){
                                $colorClass = "list-group-item-danger";
                            }
                            if($aaindex == $i){
                                $colorClass = "list-group-item-success";
                            }
                        }
                        echo "<button type=\"button\" class=\"list-group-item list-group-item-action $colorClass\" onclick=\"setChecked('ans$i')\">$value</button>";
                        $i++;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>