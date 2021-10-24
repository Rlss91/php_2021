<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 24-10-2021</title>
</head>
<body>
    <?php 
        
        $arr = [5,2,4,87,324,34,1];
        function swap(&$a, &$b){
            $temp = $a; //temp = 5, a = 5, b = 6
            $a = $b;    //temp = 5, a = 6, b = 6
            $b = $temp; //temp = 5, a = 6, b = 5
        }
        function sortArr($arr, $ac = true){
            //ac(true)  from 1, ..., n
            //ac(false) from n, ..., 1
            if(!is_array($arr)){
                return null;
            }
            $length = count($arr);
            if($length<=1){
                return $arr;
            }

            for($kurrent=0;$kurrent<$length;$kurrent++){
                for($cheking=0;$cheking<$length;$cheking++){
                    // if($ac){
                    //     if($arr[$kurrent] < $arr[$cheking]){
                    //         swap($arr[$kurrent], $arr[$cheking]);
                    //     } 
                    // } else {
                    //     if($arr[$kurrent] > $arr[$cheking]){
                    //         swap($arr[$kurrent], $arr[$cheking]);
                    //     } 
                    // }
                    if($arr[$kurrent] < $arr[$cheking] && $ac){
                        $tmp = $arr[$kurrent];
                        $arr[$kurrent] = $arr[$cheking];
                        $arr[$cheking] = $tmp;
                    }
                    if($arr[$kurrent] > $arr[$cheking] && !$ac){
                        $tmp = $arr[$kurrent];
                        $arr[$kurrent] = $arr[$cheking];
                        $arr[$cheking] = $tmp;
                    }
                }
            }
            return $arr;
        }
        print_r(sortArr($arr, false));
        echo "<br />";
        function findMax($arr){
            if(!is_array($arr)){
                return null;
            }
            $length = count($arr);
            if($length==1){
                return $arr[0];
            }
            if($length<1){
                return null;
            }
            $max = $arr[0];
            foreach($arr as $val){
                if($max<$val){
                    $max = $val;
                }
            }
            return $max;
        }
        echo findMax($arr);
        echo "<br />";


        function avgOfArray($arr){
            if(!is_array($arr)){
                return 0;
            }
            $length = count($arr);
            if($length==1){
                return 1;
            }
            if($length<1){
                return 0;
            }
            $sum = 0;
            foreach($arr as $val){
                $sum += $val;
            }
            return $sum / $length;
        }

        function countHowMatchAbove($arr){
            if(!is_array($arr)){
                return 0;
            }
            $length = count($arr);
            if($length==1){
                return 1;
            }
            if($length<1){
                return 0;
            }
            $avg = avgOfArray($arr);
            $count = 0;
            foreach($arr as $val){
                if($avg <= $val){
                    $count++;
                }
            }
            return $count;
        }
    ?>
</body>
</html>