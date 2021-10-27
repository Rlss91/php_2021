<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = 'fdrtgfdtht';
        $phone = '123212354352';
        
        $message = <<<EOT
        <p style="color: blue">Name: $name</p>
        <p style="color: green">Phone: $phone</p>
        <br />
        EOT;

        echo $message;

        $message1 = <<<'EOT'
        <p style="color: blue">Name: $name</p>
        <p style="color: green">Phone: $phone</p>
        <br />
        EOT;
         
        $message2 = <<<"EOT"
        <p style="color: blue">Name: $name</p>
        <p style="color: green">Phone: $phone</p>
        <br />
        EOT;

        echo $message1;
        echo $message2;

        $str = "abcde";
        echo $str[2] . "<hr />";

        $unixtime = time();
        echo $unixtime;
        echo "<br />";

        date_default_timezone_set('Asia/Jerusalem');
 
        $date = date("Y-m-d H:i:s");
        echo $date;
        echo "<br />";

        echo "<hr />";

        function printMatching($pattern, $str, $char){
            echo "str: " . $str . "<br/>";
            echo "pattern: " . $pattern . "<br/>";
            if(preg_match($pattern, $str)){
                echo $char . ": " . "true";
            }else{
                echo $char . ": " . "false";
            }
            echo "<br />";
        }
        $str = "Hello world";
        $pattern = '/.ello/i';
        printMatching($pattern, $str, ".");
        $str = "Hello world.";
        $pattern = '/\./i';
        printMatching($pattern, $str, "\\");
        $str = "Hello world.";
        $pattern = '/[ff]/i';
        printMatching($pattern, $str, "[]");
        $str = "Hello world.";
        $pattern = '/[A-Za-z0-9]/i';
        printMatching($pattern, $str, "[]");
        $str = "Hello world.";
        $pattern = '/[\.]/i';
        printMatching($pattern, $str, "[]");
        $str = "helloworld";
        $pattern = '/[^a-z]/';
        printMatching($pattern, $str, "^");
        $str = "helloworld";
        $pattern = '/[^A-Z]/';
        printMatching($pattern, $str, "^");
        $str = "Hello world";
        $pattern = '/\d/';
        printMatching($pattern, $str, "\\d");
        $str = "Hello world";
        $pattern = '/\D/';
        printMatching($pattern, $str, "\\D");
        $str = "Hello world";
        $pattern = '/\s/';
        printMatching($pattern, $str, "\\s");
        $str = " ";
        $pattern = '/\S/';
        printMatching($pattern, $str, "\\S");
        $str = "hHello world";
        $pattern = '/h?Hello/';
        printMatching($pattern, $str, "?");
        $str = "worlddddd";
        $pattern = '/world*/';
        printMatching($pattern, $str, "*");
        $str = 'abc78 dfg';
        $pattern = "/abc[0-9]+\sdfg/"; 
        printMatching($pattern, $str, "+");
        $str = "Hello world 999";
        $pattern = '/[0-9]{2}/';
        printMatching($pattern, $str, "{}");
        $str = "12345";
        $pattern = '/[0-9]{2,3}/';
        printMatching($pattern, $str, "{}");
        $str = 'My name is  and i leave in "0" city';
        $pattern = '/".+?"/'; 
        printMatching($pattern, $str, "{}");
        $str = 'files.png';
        $pattern = '/(txt|csv|png)/'; 
        printMatching($pattern, $str, "(|)");
        $str = 'Files.png';
        $pattern = '/^[A-Z]/'; 
        printMatching($pattern, $str, "(^)");
        $str = 'Files.png';
        $pattern = '/\.(png)$/'; 
        printMatching($pattern, $str, "(|)");
        $str = '45R_foodld6987';
        $pattern = "/^(?=.*[A-Z])[\w]+$/"; 
        printMatching($pattern, $str, "(?=)");
        $str = '089878';
        $pattern = "/^(?!.*(3|6))0[\d]+$/"; 
        printMatching($pattern, $str, "(?!)");
        $str = 'Asd dfg 5@';
        echo "<hr />";
        $pattern = "/^(?!.*\s\s)"
        .  "(?!.*\.\.)"
        .  "(?!.*,,)"
        .  "[א-תA-Z][א-תa-zA-Z .,0-9@]{2,30}$/";
        printMatching($pattern, $str, "names");
        $str = 'foo@domain.com';
        $pattern = "/^(?!.*\.\.)"
                .  "[\w.\-#!$%&'*+\/=?^_`{}|~]{1,35}"
                .  "@[\w.\-]+\.[a-zA-Z]{2,15}$/";
        printMatching($pattern, $str, "email");
        $str = 'Aa123456!';
        $pattern = "/^(?=.*\d)"
                .  "(?=.*[A-Z])"
                .  "(?=.*[a-z])"
                .  "(?=.*[#!*@$%^&()\-_]+)"
                .  "[A-Za-z\d#!*@$%^&()]{6,20}$/";
        printMatching($pattern, $str, "password");
        $str = '0506669987';
        $pattern = "/^(?:0(?!(5|7))(?:2|3|4|8|9))(?:-?\d){7}$"
        .   "|^(0(?=5|7)(?:-?\d){9})$/";
        printMatching($pattern, $str, "phone number");
        $str = 'https://www.walla.co.il';
        $pattern = "/^(?:http|https):\/\/"
                .  "[a-zA-Z0-9_~:\-\/?#[\]@!$&'()*+,;=`^.%]+"
                .  "\.[a-zA-Z0-9_~:\-\/?#[\]@!$&'()*+,;=`^.%]+$/";
        printMatching($pattern, $str, "url");
        $str = '255.255.255.255';
        $pattern = "/^(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\."
                .  "(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\."
                .  "(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\."
                .  "(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/";
        printMatching($pattern, $str, "ip");
    ?>
</body>
</html>