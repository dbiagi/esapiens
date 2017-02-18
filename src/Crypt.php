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
        $key = static::getPrimesUntil(100)[8];

        $aux = $text = strtolower($text);

        for ($i = 0; $i < strlen($text); $i++) {
            if (in_array(strtolower($text[$i]), static::$map)) {
                $index = static::getIndex($text[$i]);
                $aux[$i] = static::$map[($index + $key) % 26];
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