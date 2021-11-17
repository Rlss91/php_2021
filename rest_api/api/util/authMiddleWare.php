<?php
    require_once "jwt.php";
    // echo json_encode(['headerToken'=> compareJWT($_SERVER['HTTP_TOKEN'])]);
    if(!compareJWT($_SERVER['HTTP_TOKEN'])){
        // header('Location: ../../login.html');
        echo json_encode(['msg'=> false]);
        exit();
    } 
?>