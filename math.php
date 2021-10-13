<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body{
            font-size: 3rem;
        }
        .a{
            background: #abc;
        }
        .b{
            background: #def;
        }
    </style>
</head>
<body>
    <?php 
        echo "pi: " . pi();
        echo "<br />";
        echo "min: " . min(1,3,4,65,23,4535,-1);
        echo "<br />";
        echo "max: " . max(1,3,4,65,23,4535,-1);
        echo "<br />";
        echo "abs: " . abs(-1);
        echo "<br />";
        echo "sqrt: " . sqrt(4);
        echo "<br />";
        echo "round: " . round(7.5);
        echo "<br />";
        echo "rand: " . rand();
        echo "<br />";
        echo "rand from 1 to 10: " . rand(1,10);
        echo "<br />";
    ?>
    <h1>1<?="2"; ?>3</h1>
</body>
</html>