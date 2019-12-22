<?php

$n1 = intval(readline());
$n2 = intval(readline());
$n3 = intval(readline());
$sum = getSum($n1, $n2);
echo subtract($sum, $n3);

function getSum(int $n1, int $n2)
{
    return $n1 + $n2;
}

function subtract(int $sum, int $n3)
{
    return $sum - $n3;
}
