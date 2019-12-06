<?php

$nums = array_map("intval",
    explode(" ", readline()));
$evenSum = 0;
$oddSum = 0;

foreach ($nums as $num) {
    if ($num % 2 == 0) {
        $evenSum += $num;
    } else {
        $oddSum += $num;
    }
}
$diff = $evenSum - $oddSum;
echo $diff;
