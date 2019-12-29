<?php

$nums = array_map("intval", explode(" ", readline()));
$bombNums = array_map("intval", explode(" ", readline()));

for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] == $bombNums[0]) {
        for ($j = 1; $j <= $bombNums[1]; $j++) {
            if ($i - $j < 0) {
                break;
            } else {
                $nums[$i - $j] = 0;
            }
        }
        for ($j = 1; $j <= $bombNums[1]; $j++) {
            if (($i + $j) > count($nums) - 1) {
                break;
            } else {
                $nums[$i + $j] = 0;
            }
        }
        $nums[$i] = 0;
    }
}
$sum = array_sum($nums);
echo $sum;
