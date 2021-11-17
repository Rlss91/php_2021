<?php
    require_once "mysqlConfig.php";
    $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

    $sql = 'INSERT INTO users'
    .'('
    .'name,'
    .'email,'
    .'password)'
    .'VALUES'
    .'('
    ."'test',"
    ."'test@test.com',"
    ."'123123123123213');";

    echo "sql: $sql <br>";

    $result = mysqli_query($link, $sql);

    if($result && mysqli_affected_rows($link)>0){
        echo "inserted with id " . mysqli_insert_id($link);
    }

    mysqli_close($link);