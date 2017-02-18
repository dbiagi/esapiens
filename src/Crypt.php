<?php

namespace ESapiens;

class Crypt extends Math {
    private static $map = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
        'i', 'j', 'l', 'm', 'n', 'k', 'o', 'p',
        'q', 'r', 's', 't', 'u', 'v', 'x', 'w',
        'y', 'z',
    ];

    public static function decrypt($text) {
        $key = static::getPrimesUntil(100)[9];

        $aux = $text;

        for ($i = 0; $i < strlen($text); $i++) {
            if (in_array(strtolower($text[$i]), static::$map)) {
                $aux[$i] = static::$map[($i + $key) % 26];
            }
        }

        return $aux;
    }

    private static function getIndex($letter) {
        foreach (static::$map as $key => $value) {
            if ($value == $letter) {
                return $key;
            }
        }
    }
}