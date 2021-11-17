<?php
    session_start();
    if(isset($_SESSION['data'])){
        $res = ['msg'=>'OK from session'];
        echo json_encode($res);
    } else{
        $_SESSION['data'] = 1;
        $res = ['msg'=>'OK'];
        echo json_encode($res);
    }

?>