<?php
namespace Challenge\helpers;

class RPSHelper
{
    static function check_keys_existence($array, $keys) {
        $count = 0;
        foreach ($keys as $key) {
            if (array_key_exists( $key, $array)) {
                $count ++;
            }
        }
        return count($keys) === $count ? true : false;
    }

    static function getClassName($className) {
        $path = explode('\\', $className);
        return array_pop($path);
    }
}