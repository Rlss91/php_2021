<?php

    require_once "db.php";
    require_once "util/jwt.php";
    // echo json_encode($db);
    if(isset($_POST['username']) && isset($_POST['password'])){
        // echo json_encode(
        //     [
        //         'msg'=>'OK', 
        //         "username"=>$_POST['username'], 
        //         'password'=>$_POST['password']
        //     ]
        // );
        $isExist = false;
        foreach($db as $user){
            if($user['username'] === $_POST['username'] && $user['password'] === $_POST['password']){
                $isExist = true;
                break;
            }
        }
        if($isExist){
            $token = generateJWT(["username"=>$_POST['username']]);
            echo json_encode(["msg" => 'OK', 'token' => $token]);
        } else {
            echo json_encode(["msg" => 'err']);
        }

    }else {
        echo json_encode(['msg'=>'err']);
    }

?>