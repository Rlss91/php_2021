<?php

function queryParamToObj($queryStr){
    $queryArr = explode('&', $queryStr);
    $obj = [];
    foreach($queryArr as $value){
        $queryTmpArr = explode('=', $value);
        $obj[$queryTmpArr[0]]=$queryTmpArr[1];
    }
    return $obj;
}

?>