<?php

$nums = explode(" ", readline());

for ($i = 0; $i < count($nums); $i++) {
    $nums[$i] = strrev($nums[$i]);
}
$sum = array_sum($nums);
echo $sum;
