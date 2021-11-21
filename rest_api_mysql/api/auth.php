<?php

    require_once "mysql/users.php";
    require_once "util/jwt.php";
    require_once "util/passwordTester.php";
    if(isset($_POST['username']) && isset($_POST['password'])){
        $users = selectUserByEmail($_POST['username']);
        
        if(count($users) === 1){
            // echo json_encode(['msg'=>$users]);
            if(compareHash(base64_decode($users[0]['password2']), $_POST['password'])){
                $token = generateJWT(["username"=>$_POST['username']]);
                echo json_encode(["msg" => 'OK', 'token' => $token]);
                die();
            }
        } 
    } 
    echo json_encode(['msg'=>'err']);