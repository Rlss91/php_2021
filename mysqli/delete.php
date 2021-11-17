<?php
    require_once "mysqlConfig.php";
    $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

    $sql = "DELETE FROM users"
    ." WHERE id = 4;";
    echo "sql: $sql <br>";
    
    $result = mysqli_query($link, $sql);

    if($result && mysqli_affected_rows($link)>0){
        echo "deleted";
    }

    mysqli_close($link);