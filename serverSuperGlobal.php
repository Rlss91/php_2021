<?php 

    //ditails about client machine
    echo "HTTP_USER_AGENT: " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
    //ip addr of client
    echo "REMOTE_ADDR: " . $_SERVER["REMOTE_ADDR"] . "<br>";
    //ip addr of server
    echo "SERVER_ADDR: " . $_SERVER["SERVER_ADDR"] . "<br>";
    //locations of server files
    echo "DOCUMENT_ROOT: " . $_SERVER["DOCUMENT_ROOT"] . "<br>";
    //from where redirected to website
    // echo "HTTP_REFERER: " . $_SERVER["HTTP_REFERER"] . "<br>";
    //request url
    echo "REQUEST_URI: " . $_SERVER["REQUEST_URI"] . "<br>";
    //request method
    echo "REQUEST_METHOD: " . $_SERVER["REQUEST_METHOD"] . "<br>";
    //query string key=value&key=value&...
    echo "QUERY_STRING: " . $_SERVER["QUERY_STRING"] . "<br>";

?>