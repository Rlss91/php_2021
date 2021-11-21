<?php
    require_once "mysqlConfig.php";
    $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

    $sql = "SELECT *, id as 'user_id' FROM users;";
    echo "sql: $sql <br>";
    $result = mysqli_query($link, $sql);
    $numrows = mysqli_num_rows($result);
    $affectedrows = mysqli_affected_rows($link);
    echo "affectedrows = $affectedrows <br>";
    echo "numrows = $numrows <hr>";
    if($result && $numrows>0){
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            echo "<hr>";
        }
    }

    mysqli_close($link);
    ?>
