<?php

    if(isset($_GET['aac'])){
        setcookie("sortQuery", $_SERVER["QUERY_STRING"], time()+3600);
    } else {
        setcookie("sortQuery", '', time()-1);
    }
    header('Location: index.php');
?>