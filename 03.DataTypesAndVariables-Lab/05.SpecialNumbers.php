<?php
$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    $digitsSum = 0;
    $digits = $i;
    while ($digits > 0) {
        $digitsSum += $digits % 10;
        $digits /= 10;
    }
    if ($digitsSum == 5 || $digitsSum == 7 || $digitsSum == 11) {
        echo "$i -> True" . PHP_EOL;
    } else {
        echo "$i -> False" . PHP_EOL;
    }
}
