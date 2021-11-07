<?php

$arr = ['a', 'b', 'c', 'd'];
sort($arr);
if(isset($_COOKIE['sortMethod']) && $_COOKIE['sortMethod'] == 0){
    rsort($arr);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 07/11/2021</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="index.js"></script>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="get">
            <div class="card">
                <div class="card-header">
                    Names
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        List of names
                    </h5>
                    <p class="card-text">sort</p>
                    <?php 
                    
                    if(isset($_COOKIE['sortMethod']) && $_COOKIE['sortMethod'] == 0){
                        echo "<button class=\"btn btn-primary\" onclick=\"handleSortClick(1)\">↑</button>";
                    } else {
                        echo "<button class=\"btn btn-primary\" onclick=\"handleSortClick(0)\">↓</button>";
                    }
                    ?>
                    <input type="hidden" name="aac" id="aac" />
                </div>
            </div>
            <?php
                foreach($arr as $value){
                    echo "<button type=\"button\" class=\"list-group-item list-group-item-action\">$value</button>";
                }
            ?>
        </form>
    </div>
</body>
</html>