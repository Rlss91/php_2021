<?php

    function generateJWT($payload){
        $headers = ['alg'=>'HS256', 'typ'=>'JWT'];
        $headers_encoded = base64_encode(json_encode($headers));

        $payload['iat']=time();
        $payload_encoded = base64_encode(json_encode($payload));

        $key = 'secrectkey';
        $signature = hash_hmac('sha256', "$headers_encoded.$payload_encoded", $key, true);
        $signature_encoded = base64_encode($signature);

        $token = "$headers_encoded.$payload_encoded.$signature_encoded";
        return $token;
    }

    //b64Header.b64Payload.b64Sig
    function compareJWT($token){
        $tokenarr = explode(".", $token);
        $tokenarrlength = count($tokenarr);
        if($tokenarrlength != 3){
            return null;
        }
        $tokenHeaderAndPayload = "$tokenarr[0].$tokenarr[1]";
        $key = 'secrectkey';
        $compareSignature = hash_hmac('sha256', $tokenHeaderAndPayload, $key, true);
        $originalSignature = base64_decode($tokenarr[2]);
        return hash_equals($originalSignature, $compareSignature);
    }

    // $userToken = generateJWT(['test'=>'1111']);
    // echo $userToken;
    // echo "<br>";
    // echo compareJWT($userToken);

?>