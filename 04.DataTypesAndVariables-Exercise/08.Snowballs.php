<?php

$snowballsNum = intval(readline());
$bestValue = 0;
$bestSnowball = 0;
$bestTime = 0;
$bestQ = 0;

for ($i = 0; $i < $snowballsNum; $i++) {
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQ = intval(readline());
    $snowballValue = bcpow(($snowballSnow / $snowballTime), $snowballQ);

    if ($snowballValue >= $bestValue) {
        $bestValue = $snowballValue;
        $bestSnowball = $snowballSnow;
        $bestTime = $snowballTime;
        $bestQ = $snowballQ;
    }
}
echo "$bestSnowball : $bestTime = $bestValue ($bestQ)";
