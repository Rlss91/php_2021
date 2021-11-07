<?php 

    session_start();//start the sessions

    //create db
    $dbemail = ['1@2.com', '222@222.com'];
    $dbpassword = ['Aa!1122', 'Aa!1122'];

    //check function
    function email_check($str){
        $pattern = "/^(?!.*\.\.)"
                .  "[\w.\-#!$%&'*+\/=?^_`{}|~]{1,35}"
                .  "@[\w.\-]+\.[a-zA-Z]{2,15}$/";
        return preg_match($pattern, $str);
    }
    function password_check($str){
        $pattern = "/^(?=.*\d)"
                .  "(?=.*[A-Z])"
                .  "(?=.*[a-z])"
                .  "(?=.*[#!*@$%^&()\-_]+)"
                .  "[A-Za-z\d#!*@$%^&()]{6,20}$/";
        return preg_match($pattern, $str);
    }

    //delete old session
    unset($_SESSION['login_err']);

    if(isset($_POST["email"]) && isset($_POST["password"])){
        // echo 'email: '.$_POST["email"] . '<br />';
        // echo 'password: '.$_POST["password"];
        
        //regex input from user check
        if(email_check($_POST["email"]) && password_check($_POST["password"])){
            $i=0;
            $wasFoundInDB = 0;
            foreach($dbemail as $email){
                if($_POST["email"] === $email && $_POST["password"] === $dbpassword[$i]){
                    $_SESSION["email"] = $email;
                    $_SESSION["isLoggedIn"] = 1;//1 in php is true
                    $wasFoundInDB = 1;
                    break;
                }
                $i++;
            }
            if($wasFoundInDB == 0){
                $_SESSION['login_err'] = 'email or password not good';
                header('Location: login.php');
            } else {
                header('Location: admin.php');
            }
        } else {
            $_SESSION['login_err'] = 'email or password incorrect';
            header('Location: login.php');
        }
    }
?>