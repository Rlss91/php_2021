<?php

    $data = "bla bla bla\nbla bla bla\n";
    $path = "files/data.txt";
    //create file
    //remove the old data
    //write the new data
    file_put_contents($path, $data);
    $data_to_add = "bla bla bla\n";
    //add data to file without overwriting it
    file_put_contents($path, $data_to_add, FILE_APPEND);
    //read data from file
    $data_from_file = file_get_contents($path);
    echo $data_from_file . "<hr>";
    //read data from file with enter
    $data_from_file = str_replace("\n", '<br>', $data_from_file);
    echo $data_from_file . "<hr>";

    $data_from_file = file("files/data.csv");
    echo "<br>";
    print_r($data_from_file);
    echo "<br>";
    print_r(explode(',',$data_from_file[0]));
    echo "<hr>";

    //check if file or directory exists
    echo file_exists($path) . "<br>";
    //get file size 
    echo filesize($path) . "<br>";
    //check if I can read from file
    echo is_readable($path) . "<br>";
    //check if I can write to file
    echo is_writeable($path) . "<br>";

    //delete file
    unlink($path);

    //create directory
    mkdir("files/test");

    //delete directory
    rmdir("files/test");
    
    //delete directory with not empty
    function rmDirRe($dirPath){
        $fileAndDir = scandir($dirPath);
        $length = count($fileAndDir);
        for($i=2;$i<$length;$i++){
            if(is_file("$dirPath/$fileAndDir[$i]")){
                unlink("$dirPath/$fileAndDir[$i]");
            } else {
                rmDirRe("$dirPath/$fileAndDir[$i]");
            }
        }
        rmdir("$dirPath");
    }

    rmDirRe("files/test2");