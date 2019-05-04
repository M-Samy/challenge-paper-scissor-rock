<?php
namespace Challenge\Helpers;

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
}