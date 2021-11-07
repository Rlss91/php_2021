<?php

    if(isset($_GET['aac'])){
        if($_GET['aac'])
            setcookie("sortMethod", 1, time()+3600);
        else
            setcookie("sortMethod", 0, time()+3600);
    }
    header('Location: index.php');
?>