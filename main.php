<?php

require __DIR__.'/vendor/autoload.php';

use ESapiens\Math;
use ESapiens\Crypt;

// Questão 1
Math::printPrimes(100);

echo PHP_EOL;

// Questão 2
Math::printPrimesSum(100);

echo PHP_EOL;

// Questão 3
echo Crypt::decrypt('Ufwfgjsx, athj htshqznz f uwtaf ij uwtlwfrfhft if Jxfunjsx!');


