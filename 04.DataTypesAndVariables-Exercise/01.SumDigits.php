<?php

$num = intval(readline());
$sum = 0;
while ($num > 0) {
    $lastNum = $num % 10;
    $num /= 10;
    $sum += $lastNum;
}
echo $sum;
