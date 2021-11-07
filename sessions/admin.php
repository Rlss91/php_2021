<?php
    session_start();
    if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] !== 1){
        header('Location: login.php');
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session admin example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav>
            <div><a class="btn btn-info" href="logout.php">Logout</a></div>
        </nav>
        <main>
            <h1>Welcome <?=$_SESSION["email"]?></h1>
        </main>
    </div>
</body>
</html>