<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loops</title>
    <style>
      html,
      body {
        font-size: 2rem;
      }
    </style>
  </head>
  <body>
    <?php

        $user = 'aaa';
        $num = 5;

        while($num > 0){
          echo 'aaa';
          echo '<br />';
          $num--;
        }

        echo "<hr />";

        $num = 0;
        do{
          echo 'aaa';
          echo '<br />';
          $num--;
        }while($num > 0);

        echo "<hr />";

        for($i=0;$i<5;$i++){
          echo 'aaa';
          echo '<br />';
        }
        echo "<hr />";
        for($i=0;$i<5;){
          echo 'aaa';
          echo '<br />';
          $i++;
        }
        echo "<hr />";
        for($i=0;;$i++){
          echo 'aaa';
          echo '<br />';
          if($i>=5){
            break;
          }
        }
        echo "<hr />";
        $i = 0;
        for(;$i<5;$i++){
          echo 'aaa';
          echo '<br />';
        }
        echo "<hr />";
    ?>
  </body>
</html>
