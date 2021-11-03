<?php
$length = $_COOKIE['length'];
for($i=0;$i<$length;$i++){
    if(empty($_POST["ans$i"])){
        echo "ans$i is empty <br />";
    }
    else{
        echo $_POST["ans$i"];
        setcookie("selectedIndex", $i, time()+3600);
        setcookie("checkFromCookie", 1, time()+3600);
        echo "<br />";
        break;
    }
}

if( isset($_POST['submit']) ){

    
    // if(empty($_POST['ans0'])){

    // }
   
    
     
  }
  header('Location: index.php');
?>