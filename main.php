<?php

require __DIR__.'/vendor/autoload.php';

use ESapiens\Crypt;
use ESapiens\Math;

// Questão 1
Math::printPrimes(100);

echo PHP_EOL;

// Questão 2
Math::printPrimesSum(100);

echo PHP_EOL;

$sums = Math::getPrimeSumUntil(100);

// Questão 3
echo Crypt::decrypt('Ufwfgjsx, athj htshqznz f uwtaf ij uwtlwfrfhft if Jxfunjsx!', $sums[9]);

