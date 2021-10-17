<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        html, body{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php

        echo "trim: " . trim('      word      ');
        echo "<br />";
        echo "str_replace: " . str_replace('!', '@', 'Hello world!');
        echo "<br />";
        echo "str_replace: " . str_replace('d', 'a', 'asdddfghdjdkl');
        /*
            str_replace(
                what characters need to be replaced,
                replaces with,
                str
            )

        */
        echo "<br />";
        echo "strlen: " . strlen('Hello world!');
        echo "<br />";
        echo "strtolower: " . strtolower('Hello world!');
        echo "<br />";
        echo "strtoupper: " . strtoupper('Hello world!');
        echo "<br />";
        echo "strpos: " . stripos('Hello world!', 'W');
        echo "<br />";

    ?>
</body>
</html>