<?php
namespace Apige\GraphQLMySQLAPI\Auth;

use \Firebase\JWT\JWT;

class JWTAuth {
    private static $secret_key = 'your_secret_key';

    public static function encode($data) {
        return JWT::encode($data, self::$secret_key);
    }

    public static function decode($jwt) {
        return JWT::decode($jwt, self::$secret_key, array('HS256'));
    }
}


?>