<?php
    $us = "kenny";
    $ps = "123456";
    $title = "Another way";
    $lang = "en";
?>

<!DOCTYPE html>
<?php if($lang =='en'): ?>
<html lang="en">
<?php else: ?>
<html lang="he" dir="rtl">
<?php endif; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style>
      html,
      body {
        font-size: 2rem;
      }
    </style>
</head>
<body>
    <ul>
        <?php for($i=0;$i<5;$i++): ?>
            <?php if($i%2): ?>
                <li><?=$i+1?></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
    <div>
        <?php if($us == "kenny"): ?>
            <div>1</div>
            <?php if($ps != "123456"): ?>
                <div>2</div>
            <?php endif; ?>        
        <?php endif; ?>
    </div>
</body>
</html>