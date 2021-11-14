<?php 

    function getPageName(){
        //echo $_SERVER['REQUEST_URI'];
        $fname = $_SERVER['REQUEST_URI'];
        $tarr = explode('/', $fname);
        $tlength = count($tarr);
        if($tlength>0){
            return $tarr[$tlength-1];
        } else {
            return "/";
        }
    }

    $pageName = getPageName();
    // echo $pageName;
    $navbarArr = [
        ['index.php', 'Home'],
        ['aboutus.php', 'About Us'],
        ['contactus.php', 'Contact Us']
    ];

?>