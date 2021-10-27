<?php 
    $isEmail = false;
    $isPassword = false;
    if(isset($_GET['email'])){
        // echo $_GET['email'];
        $str = $_GET['email'];
        $pattern = "/^(?!.*\.\.)"
                .  "[\w.\-#!$%&'*+\/=?^_`{}|~]{1,35}"
                .  "@[\w.\-]+\.[a-zA-Z]{2,15}$/";
        if(preg_match($pattern, $str)){
            $isEmail = true;
        }
        // echo "<br />";
    }
    if(isset($_GET['password'])){
        // echo $_GET['password'];
        // echo "<br />";
        $str = $_GET['password'];
        $pattern = "/^(?=.*\d)"
                .  "(?=.*[A-Z])"
                .  "(?=.*[a-z])"
                .  "(?=.*[#!*@$%^&()\-_]+)"
                .  "[A-Za-z\d#!*@$%^&()]{6,20}$/";
        if(preg_match($pattern, $str)){
            $isPassword = true;
        }
    }
    if($isEmail && $isPassword){
        echo "your email and password is good";
    } else {    
        header('Location: 404.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>