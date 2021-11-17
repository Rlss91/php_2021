<?php
    require_once "mysqlConfig.php";
    $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

    //code...

    mysqli_close($link);