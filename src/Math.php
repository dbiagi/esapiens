<?php

namespace ESapiens;

/**
 * Class Math
 *
 * @package ESapiens
 */
class Math {

    /**
     * Verifica se o número é primo.
     *
     * @param int $num
     * @return bool
     */
    public static function isPrime($num) {
        if ($num < 1) {
            return false;
        } elseif ($num <= 3) {
            return true;
        } elseif ($num % 2 === 0 || $num % 3 === 0) {
            return false;
        }

        for ($i = $num - 1; $i > 1; $i--) {
            if($num % $i === 0){
                return false;
            }
        }

        return true;
    }

    /**
     * Lista os números primos.
     *
     * @param int $max
     */
    public static function printPrimes($max){
        echo implode(', ', Math::getPrimesUntil($max));
    }

    /**
     * Retorna os números primos menores ou iguais a $max.
     * @param int $max
     * @return array
     */
    public static function getPrimesUntil($max){
        $primes = [];
        for($i = 1; $i <= $max; $i++){
            if(Math::isPrime($i)){
                $primes[] = $i;
            }
        }

        return $primes;
    }

    /**
     * Verifica se o número informado é a soma de depois números primos.
     * @param $num
     * @return bool
     */
    public static function isPrimeSum($num){
        if($num % 2 === 0){
            return false;
        }

        $lowerPrimes = Math::getPrimesUntil($num-1);

        for($i = 0; $i < count($lowerPrimes); $i++){
            for($k = 0; $k < count($lowerPrimes); $k++){
                if(($lowerPrimes[$i] + $lowerPrimes[$k]) === $num){
                    return true;
                }
            }
        }

        return false;
    }

    public static function getPrimeSumUntil($max){
        $nums = [];

        for ($i = 1; $i <= $max; $i++){
            if(Math::isPrimeSum($i)){
                $nums[] = $i;
            }
        }

        return $nums;
    }

    /**
     * Printa na tela os números primos até $max.
     * @param $max
     */
    public static function printPrimesSum($max) {
        echo implode(', ', Math::getPrimeSumUntil($max));
    }


}
