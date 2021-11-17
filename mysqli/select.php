<?php
    require_once "mysqlConfig.php";
    $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

    $sql = "SELECT *, id as 'user_id' FROM users;";
    echo "sql: $sql <br>";
    $result = mysqli_query($link, $sql);

    if($result && mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
    }

    mysqli_close($link);
    ?>
