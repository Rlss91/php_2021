<?php
    require_once "api/mysql/users.php";
    $key = 'secrectkey';
    $pass1 = hash_hmac('sha256', "123456", $key, true);
    $pass1 = base64_encode($pass1);
    updatePassword(1, $pass1);
    $pass2 = hash_hmac('sha256', "234567", $key, true);
    $pass2 = base64_encode($pass2);
    updatePassword(2, $pass2);
    echo "$pass1<br>";
    echo "$pass2<br>";
?>
