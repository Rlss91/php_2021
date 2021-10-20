<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
    
    //0...
    $a1 = array(1,2,'asdfsdf', false, null);
    $a2 = [1,2, 'asdfsdf', false, null];
    
    //1, '2', 'word'
    $a3 = array(1=>1, '2'=>2, 'word'=>'asdfsdf');
    $a4 = [1=>1, '2'=>2, 'word'=>'asdfsdf'];

    echo $a1[2];
    echo "<br />";
    echo $a2[2];

    echo "<br />";
    echo $a3['word'];
    echo $a4['word'];

    echo "<hr />";
    $a1[0] = 'some text';
    echo $a1[0];
    echo "<br />";
    $a3[1] = 'some text';
    echo $a3[1];
    echo "<hr />";
    print_r($a1);
    array_push($a1, 2323, 34343);
    echo "<br />";
    print_r($a1);
    $a1[] = 1111111;
    echo "<br />";
    print_r($a1);
    echo "<hr />";
    echo "array length: " . count($a1);
    echo "<br />";
    echo "is array: ". is_array($a1);
    echo "<br />";
    echo "is array: ". is_array(13);
    echo "<br />";
    echo "is array: ". in_array(2,$a1);
    echo "<br />";
    $margedArray = array_merge($a1, $a2);
    print_r($margedArray);
    echo "<br />";
    $mappedArray = array_map('strtoupper', $a3);
    print_r($mappedArray);
    $numbers = [1,3,2,6,34];
    sort($numbers);
    echo "<br />";
    print_r($numbers);
    rsort($numbers);
    echo "<br />";
    print_r($numbers);
    echo "<br />";
    $words = ['ac', 'aa', 'cd', 'cc', 'df', 'dt', 'zd', 'zz', 'tf', 'tg'];
    sort($words);
    print_r($words);
    echo "<br />";
    $words = ['ac', 'aa', 'cd', 'cc', 'df', 'dt', 'zd', 'zz', 'tf', 'tg'];
    rsort($words);
    print_r($words);
    echo "<hr />";
    $keys = ['a'=>'1', 'c'=>'3', 'b'=>'4'];
    sort($keys);
    print_r($keys);
    echo "<br />";
    $keys = ['a'=>'1', 'c'=>'3', 'b'=>'4'];
    asort($keys);
    echo "asort: ";
    print_r($keys);
    echo "<br />";
    $keys = ['a'=>'1', 'c'=>'3', 'b'=>'4'];
    arsort($keys);
    echo "a<b>r</b>sort: ";
    print_r($keys);
    echo "<br />";
    $keys = ['a'=>'1', 'c'=>'3', 'b'=>'4'];
    ksort($keys);
    echo "ksort: ";
    print_r($keys);
    echo "<br />";
    $keys = ['a'=>'1', 'c'=>'3', 'b'=>'4'];
    krsort($keys);
    echo "k<b>r</b>sort: ";
    print_r($keys);
    echo "<hr />";
    $str = 'a,b,c,d';
    $strArr = explode(',', $str);
    echo $str . "<br />";
    print_r($strArr);
    echo "<hr />";
    $extractArr = ['key1'=>'123', 'key2'=>'234'];
    extract($extractArr);
    echo $key1;
    echo "<br />";
    echo $key2;
    echo "<hr />";
    $compactArray = compact('key1', 'key2');
    print_r($compactArray);
    echo "<hr />";
    $arr2d = [
        [1,2,3],
        [1,2,3]
    ];
    print_r($arr2d);
    echo "<br />";
    echo $arr2d[0][1];
    echo "<br />";
    $arr2dM = [
        'arr1' => [
            'v1' => 1,
            'v2' => 2,
            'v3' => 3
        ],
        'arr2' => [
            'a1' => 1,
            'a2' => 2,
            'a3' => 3
        ]
    ];
    print_r($arr2dM);
    echo "<br />";
    echo $arr2dM['arr1']['v2'];
    echo "<hr />";
    foreach($a4 as $key => $value){
        echo $key . ":" . $value;
        echo "<br />";
    }
    echo "<hr />";
    foreach($a2 as $value){
        echo  $value;
        echo "<br />";
    }
    echo "<hr />";
    foreach($arr2dM as $key => $value){
        // echo $key . ":" . $value;
        foreach($value as $keyInArr => $valueInArr){
            echo $keyInArr . ":" . $valueInArr;
        }
        echo "<br />";
    }
    echo "<hr />";
    foreach($arr2d as $valueArr){
        foreach($valueArr as $value){
            echo $value . ',';
        }
        echo "<br />";
    }
    ?>
</body>
</html>