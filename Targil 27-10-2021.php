<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 27-10-2021</title>
</head>
<body>
    <?php 
        
        //convert data to json
        /*

        {
            key: value,
            ...
        }


        */
        function isObjectArr($arr){
            if(array() === $arr) return false;
            return array_keys($arr) !== range(0, count($arr)-1);
        }
        function convertToJson($arr){
            $ret = "{";
            if(is_array($arr)){
                if(isObjectArr($arr)){
                    foreach($arr as $key => $val){
                        $ret .= '"'.$key.'":'.convertToJson($val).',';
                    }
                    $ret = substr($ret, 0, -1) . '}';
                    return $ret;
                } else {
                    $ret = '[';
                    foreach($arr as $value){
                        $ret .= convertToJson($value) . ',';
                    }
                    $ret = substr($ret, 0, -1) . ']';
                    return $ret;
                }
            } else {
                if(is_numeric($arr)){
                    return $arr;
                }
                if(is_bool($arr)){
                    if($arr){
                        return "true";
                    }else{
                        return "false";
                    }
                }
                return '"'.$arr.'"';
            }
        }
        $arr = array('test'=>array('test3'=>true, 'test4'=>"asdf"), 'test2'=>234, 'arr'=>[1,2,3]);
        echo convertToJson($arr);

    ?>
</body>
</html>