<?php

if(isset($_GET['rememberme']) && $_GET['rememberme'] == 'on'){
    //create or update cookie
    setcookie("rememberme", 1, time()+3600);
} else {
    //create or update cookie
    setcookie("rememberme", 0, time()+3600);
}

if(isset($_GET['email'])){
    //create cookie
    setcookie("email", $_GET['email'], time()+3600);
} else {
    //delete cookie
    setcookie("email", '', time()-1);
}

header('Location: index.php');

?>