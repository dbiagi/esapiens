<?php

namespace ESapiens;

/**
 * Class Crypt
 *
 * @package ESapiens
 */
class Crypt extends Math {

    /** @var array Mapa de caracteres */
    private static $map = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
        'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',
        'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
        'y', 'z',
    ];

    /**
     * Descriptografa a string $text.
     * @param $text
     * @return string String decriptografada.
     */
    public static function decrypt($text) {
        $key = static::getPrimeSumUntil(100)[7];

        $aux = $text = strtolower($text);

        for ($i = 0; $i < strlen($text); $i++) {
            if (in_array(strtolower($text[$i]), static::$map)) {
                $index = static::getIndex($text[$i]);
                $aux[$i] = static::$map[($index + $key) % 26];
            }
        }

        return $aux;
    }

    /**
     * Retorna o índice da letra no mapa de caracteres.
     *
     * @param $letter
     * @return int|string
     */
    private static function getIndex($letter) {
        foreach (static::$map as $key => $value) {
            if ($value == $letter) {
                return $key;
            }
        }
    }
}