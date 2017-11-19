<?php


namespace Alipay\Lib;


class AopEncrypt {

    public static $iv = '0000000000000000';

    public static function encrypt($str, $key)
    {
        $key = base64_decode($key);
        $encryptd = openssl_encrypt($str, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, AopEncrypt::$iv);
        return base64_encode($encryptd);
    }

    public static function decrypt($str, $key)
    {
        $str = base64_decode($str);
        $key = base64_decode($key);
        return openssl_decrypt($str, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, AopEncrypt::$iv);
    }
}
