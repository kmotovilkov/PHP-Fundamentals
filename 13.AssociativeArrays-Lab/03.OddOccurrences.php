<?php

$input = explode(" ", strtolower(readline()));
$arr = [];

foreach ($input as $item) {
    if (!key_exists($item, $arr)) {
        $arr[$item] = 0;
    }
    $arr[$item]++;
}
foreach ($arr as $key => $value) {
    if ($value % 2 != 0) {
        echo "$key ";
    }
}
