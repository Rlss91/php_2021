<?php
    $errEmail = '';
    $errPassword = '';
    $isEmail = false;
    $isPassword = false;
    if(isset($_POST['email'])){
        // echo $_POST['email'];
        $str = $_POST['email'];
        $pattern = "/^(?!.*\.\.)"
                .  "[\w.\-#!$%&'*+\/=?^_`{}|~]{1,35}"
                .  "@[\w.\-]+\.[a-zA-Z]{2,15}$/";
        if(preg_match($pattern, $str)){
            $isEmail = true;
        } else {
            $errEmail = 'invalid email';
        }
        // echo "<br />";
    }
    if(isset($_POST['password'])){
        // echo $_POST['password'];
        // echo "<br />";
        $str = $_POST['password'];
        $pattern = "/^(?=.*\d)"
                .  "(?=.*[A-Z])"
                .  "(?=.*[a-z])"
                .  "(?=.*[#!*@$%^&()\-_]+)"
                .  "[A-Za-z\d#!*@$%^&()]{6,20}$/";
        if(preg_match($pattern, $str)){
            $isPassword = true;
        } else {
            $errPassword = 'invalid password';
        }
    }
    if($isEmail && $isPassword){
        header("Location: success.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .red{
            background: #f30000;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <?php if($errEmail): ?>
                    <div id="emailHelp" class="form-text"><?=$errEmail ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" aria-describedby="passwordHelp">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                <?php if($errPassword): ?>
                    <div id="passwordHelp" class="form-text"><?=$errPassword ?></div>
                    <div id="passwordHelp" class="form-text">password should be like....</div>
                <?php endif; ?>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php 
            // echo "<ul class=\"list-group\">";
            // $length = count($err);
            // if($length>0){
            //     foreach($err as $val){
            //         echo "<li class=\"list-group-item list-group-item-danger\">" . $val . "</li>";
            //     }
            // }
            // echo "</ul>";

        ?>
    </div>
</body>
</html>