<?php
    require_once "mysqlConfig.php";

    function updatePassword($id, $password){
        $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

        $sql = "UPDATE users "
        ." SET "
        .   " users.password2 = '$password'"
        ." WHERE users.id = $id;";
        echo "sql: $sql <br>";
        
        $result = mysqli_query($link, $sql);

        if($result && mysqli_affected_rows($link)>0){
            echo "updated";
        }

        mysqli_close($link);
    }

    function selectUserByEmail($email){
        $rows = [];
        $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

        $sql = "SELECT * FROM users WHERE users.email LIKE '$email';";
        // echo "sql: $sql <br>";
        $result = mysqli_query($link, $sql);
        $numrows = mysqli_num_rows($result);
        $affectedrows = mysqli_affected_rows($link);
        // echo "affectedrows = $affectedrows <br>";
        // echo "numrows = $numrows <hr>";
        if($result && $numrows>0){
            while($row = mysqli_fetch_assoc($result)){
                // print_r($row);
                // echo "<hr>";
                $rows[] = $row;
            }
        }
        mysqli_close($link);
        return $rows;
    }