<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 20-10-2021</title>
    <style>
        html, body{
            font-size: 2rem;
            padding: 0.5rem;
        }
    </style>
    
</head>
<body>
    <?php 
    
        function is_misparReashoni($n){
            if(is_null($n)){
                return false;
            }
            if(!is_numeric($n)){
                return false;
            }
            $n = (int)$n;
            if($n == 2 || $n == 5){
                return true;
            }
            if(!($n%2)){
                return false;
            }
            if(!($n%5)){
                return false;
            }
            //81/79
            for($i = $n-2;$i>0;$i-=2){
                if(!($n%$i)){
                    if($i != 1){
                        return false;
                    }
                }
            }
            return true;
        }        

        if( is_misparReashoni(15000572)){
            echo "true";
        } else {
            echo "false";
        }
    
    ?>
</body>
</html>