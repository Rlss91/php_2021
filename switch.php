<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <style>
        html, body{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php

        $user = 'aaa';
        $num = 5;

        switch($user){
            case 'bbb':
                echo 'bbb';
                break;
            case 'aaa':
                echo 'aaa';
                break;
            default:
                echo "default";
                break;
        }

        echo "<br />";

        switch($user){
            case 'bbb':
            case 'aaa':
                echo 'aaa or bbb';
                break;
            default:
                echo "default";
                break;
        }

        echo "<br />";

        switch($user){
            case 15:
                echo 15;
                break;
            case 'aaa':
                echo 'aaa or bbb';
                break;
            default:
                echo "default";
                break;
        }

        echo "<br />";

        switch($num){
            case $num == 16 || 5:
                echo 15 . ' or ' . 5;
                break;
            case 'aaa':
                echo 'aaa or bbb';
                break;
            default:
                echo "default";
                break;
        }

    ?>
</body>
</html>