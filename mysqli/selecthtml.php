<?php
    require_once "mysqlConfig.php";
    $link = mysqli_connect(MYSQLIHOST, MYSQLIUSERNAME, MYSQLIPASSWORD, MYSQLIDB);

    $sql = "SELECT *, id as 'user_id' FROM users;";
    echo "sql: $sql <br>";
    $result = mysqli_query($link, $sql);

    

    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select from mysqli</title>
</head>
<body>
    <ul>
        <?php
        
        if($result && mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                // print_r($row);
                echo "<li>" . $row["email"] . "</li>";
            }
        }
        
        ?>
    </ul>
</body>
</html>

<?php mysqli_close($link); ?>