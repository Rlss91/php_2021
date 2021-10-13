<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php

        $a = 5;
        $b = 2;

        echo "$a + $b = " . ($a + $b);
        echo "<br />";
        echo "$a - $b = " . ($a - $b);
        echo "<br />";
        echo "$a * $b = " . ($a * $b);
        echo "<br />";
        echo "$a / $b = " . ($a / $b);
        echo "<br />";
        echo "$a % $b = " . ($a % $b);
        echo "<br />";
        echo "$a ** $b = " . ($a ** $b);
        echo "<hr />";
        echo "$a = $b = " . ($a = $b);
        echo "<br />";
        echo "$a += $b = " . ($a += $b);//$a = $a + $b
        echo "<br />";
        echo "$a -= $b = " . ($a -= $b);
        echo "<br />";
        echo "$a *= $b = " . ($a *= $b);
        echo "<br />";
        echo "$a /= $b = " . ($a /= $b);
        echo "<br />";
        echo "$a %= $b = " . ($a %= $b);
        echo "<hr />";
        $str = trim("|                 hello world                 |");
        echo $str;
        echo "<br />";
        $str = trim("|                 !!hello world!!                 |", "!");
        echo $str;
        echo "<hr />";
        $a = 5;//int, long
        $b = 5.0;//float, double
        echo $a == $b;
        echo "<br />";
        echo $a === $b;
        echo "<br />";
        echo $a != $b;
        echo "<br />";
        echo $a <> $b;
        echo "<br />";
        echo $a !== $b;
        echo "<br />";
        echo $a > $b;
        echo "<br />";
        echo $a < $b;
        echo "<br />";
        echo $a >= $b;
        echo "<br />";
        echo $a <= $b;
        echo "<br />";
        echo "<hr />";
        $a = 5;//int, long
        $b = 5.0;//float, double
        echo $a++;
        echo "<br />";
        echo $a;
        echo "<br />";
        echo ++$a;
        echo "<br />";
        echo $a;
        echo "<br />";
        echo $a--;
        echo "<br />";
        echo $a;
        echo "<br />";
        echo --$a;
        echo "<br />";
        echo $a;
        echo "<br />";
        echo "<hr />";
        $a = NULL??7;
        echo $a;
        echo "<hr />";

        // phpinfo();

    ?>
</body>
</html>