<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data type check</title>
    <style>
        html, body{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php

        $a = 5;
        $b = '5';//$number = (int)$b;
        $c = 5.5;
        $str = "hello world";
        $null;

        echo 'is_int('.$a.'): ' . (is_int($a));
        echo "<br />";
        echo 'is_int("'.$b.'"): ' . (is_int($b));
        echo "<br />";
        echo 'is_int('.$c.'): ' . (is_int($c));
        echo "<br />";
        echo 'is_int("'.$str.'"): ' . (is_int($str));
        echo "<hr />";

        echo 'is_integer('.$a.'): ' . (is_integer($a));
        echo "<br />";
        echo 'is_integer("'.$b.'"): ' . (is_integer($b));
        echo "<br />";
        echo 'is_integer('.$c.'): ' . (is_integer($c));
        echo "<br />";
        echo 'is_integer("'.$str.'"): ' . (is_integer($str));
        echo "<hr />";

        echo 'is_numeric('.$a.'): ' . (is_numeric($a));
        echo "<br />";
        echo 'is_numeric("'.$b.'"): ' . (is_numeric($b));
        echo "<br />";
        echo 'is_numeric('.$c.'): ' . (is_numeric($c));
        echo "<br />";
        echo 'is_numeric("'.$str.'"): ' . (is_numeric($str));
        echo "<hr />";

        echo 'is_string('.$a.'): ' . (is_string($a));
        echo "<br />";
        echo 'is_string("'.$b.'"): ' . (is_string($b));
        echo "<br />";
        echo 'is_string('.$c.'): ' . (is_string($c));
        echo "<br />";
        echo 'is_string("'.$str.'"): ' . (is_string($str));
        echo "<hr />";

        echo 'is_float('.$a.'): ' . (is_float($a));
        echo "<br />";
        echo 'is_float("'.$b.'"): ' . (is_float($b));
        echo "<br />";
        echo 'is_float('.$c.'): ' . (is_float($c));
        echo "<br />";
        echo 'is_float("'.$str.'"): ' . (is_float($str));
        echo "<hr />";

        echo 'is_scalar('.$a.'): ' . (is_scalar($a));
        echo "<br />";
        echo 'is_scalar("'.$b.'"): ' . (is_scalar($b));
        echo "<br />";
        echo 'is_scalar('.$c.'): ' . (is_scalar($c));
        echo "<br />";
        echo 'is_scalar("'.$str.'"): ' . (is_scalar($str));
        echo "<br />";
        echo 'is_scalar([]): ' . (is_scalar([]));
        echo "<hr />";

        echo 'is_bool('.$a.'): ' . (is_bool($a));
        echo "<br />";
        echo 'is_bool("'.$b.'"): ' . (is_bool($b));
        echo "<br />";
        echo 'is_bool('.$c.'): ' . (is_bool($c));
        echo "<br />";
        echo 'is_bool("'.$str.'"): ' . (is_bool($str));
        echo "<br />";
        echo 'is_bool(true): ' . (is_bool(true));
        echo "<br />";
        echo 'is_bool(false): ' . (is_bool(false));
        echo "<hr />";

        echo 'is_null('.$a.'): ' . (is_null($a));
        echo "<br />";
        echo 'is_null("'.$b.'"): ' . (is_null($b));
        echo "<br />";
        echo 'is_null('.$c.'): ' . (is_null($c));
        echo "<br />";
        echo 'is_null("'.$str.'"): ' . (is_null($str));
        echo "<br />";
        echo 'is_null(null): ' . (is_null(null));
        // echo "<br />";
        // echo 'is_null($null): ' . (is_null($null));
        echo "<hr />";

    ?>
</body>
</html>