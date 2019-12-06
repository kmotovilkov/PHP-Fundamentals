<?php

$arr = explode(" ", readline());
$evenSum = 0;

foreach ($arr as $num) {
    if ($num % 2 == 0) {
        $evenSum += $num;
    }
}
echo $evenSum;
