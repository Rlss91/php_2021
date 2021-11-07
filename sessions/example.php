<?php
    session_set_cookie_params(60*60*24);//session timeout
    session_start();//start a session
    $_SESSION['session_key'] = 123;//create / edit sessions
    echo "session created <br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="index.js"></script>
</head>
<body>
    <div class="container">
        <?php 
        
            if(isset($_SESSION['session_key'])){
                echo '$_SESSION[\'session_key\'] = ' . $_SESSION['session_key']; //read session value
            } else {
                echo "session not created";
            }
            echo "<br />";
            $_SESSION['session_key'] = [1,2,3];
            print_r($_SESSION['session_key']);
            unset($_SESSION['session_key']);//delete session
            print_r($_SESSION['session_key']);
            session_destroy();//delete all sessions
        ?>
    </div>
</body>
</html>