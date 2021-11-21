<?php

    function compareHash($hash, $password){
        $key = 'secrectkey';
        $newhash = hash_hmac('sha256', $password, $key, true);
        return hash_equals($hash, $newhash);
    }