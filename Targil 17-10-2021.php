<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 17-10-2021</title>
    <style>
        html, body{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php
        $us = 'test';
        $ps = 'test1!!!!!';
        echo "username: " . $us;
        echo "<br />";
        echo "password: " . $ps;
        echo "<br />";
        if($us){
            echo "username exist";
            echo "<br />";
            if(strlen($us)>2){
                echo "username correct";
                echo "<br />";
            }
        }
        if($ps){
            echo "password exist";
            echo "<br />";
            $pslen = strlen($ps);
            if($pslen >= 8 && $pslen <= 12){
                echo "password correct";
                echo "<br />";
                echo str_replace("!", "?", $ps);
                echo "<br />";
            }
        }
    ?>
</body>
</html>