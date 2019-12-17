<?php
$num = abs((int)readline());


getMultipleOfEvensAndOdds($num);

function getMultipleOfEvensAndOdds($num)
{
    $evenSum = getSumOfEvenDigits($num);
    $oddSum = getSumOfOddDigits($num);

    echo $evenSum * $oddSum;
}

function getSumOfEvenDigits($num)
{
    $sum = 0;
    while ($num > 0) {
        $lastDigit = $num % 10;
        $num = $num / 10;
        if ($lastDigit % 2 == 0) {
            $sum += $lastDigit;
        }
    }
    return $sum;
}

function getSumOfOddDigits($num)
{
    $sum = 0;
    while ($num > 0) {
        $lastDigit = $num % 10;
        $num = $num / 10;
        if ($lastDigit % 2 != 0) {
            $sum += $lastDigit;
        }
    }
    return $sum;
}
