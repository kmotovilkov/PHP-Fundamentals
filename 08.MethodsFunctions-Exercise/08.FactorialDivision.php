<?php

$n1 = intval(readline());
$n2 = intval(readline());
$division = factorial($n1) / factorial($n2);
printf("%.2f", $division);

function factorial(int $n)
{
    $result = 1;
    for ($i = $n; $i >= 1; $i--) {
        $result *= $i;
    }
    return $result;
}
