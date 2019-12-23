<?php

$arr = array_map("intval", explode(" ", readline()));

for ($i = 0; $i < intval(count($arr) / 2); $i++) {
    $first = $i;
    $last = count($arr) - 1 - $first;
    $sum = $arr[$first] + $arr[$last];
    echo "$sum ";
}

if (count($arr) % 2 == 1) {
    echo $arr[count($arr) / 2];
}
