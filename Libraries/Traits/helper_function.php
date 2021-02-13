<?php

if (! function_exists('getKey')) {
function getKey()
{
    return 'kiu123skdcampus*';
}
}



if (! function_exists('encrypts')) {
 function encryptss($data){
    $key = getKey();
    return base64_encode($data);
    // return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128,$key,$data,MCRYPT_MODE_CBC,"\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0"));
}
}


if (! function_exists('decrypts')) {
    function decryptss($data){
        $key = getKey();
        return $decode = base64_decode($data);
        // return mcrypt_decrypt(MCRYPT_RIJNDAEL_128,$key,$decode,MCRYPT_MODE_CBC,"\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0");
        
        
    }
    }
