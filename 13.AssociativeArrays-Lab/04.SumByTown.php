<?php

$towns = explode(", ", (readline()));
$arr = [];
$city = "";
foreach ($towns as $key => $value) {
    if ($key % 2 == 0) {
        if (!key_exists($value, $arr)) {
            $arr[$value] = 0;
        }
        $city = $value;
    } else {
        $arr[$city] += $value;
    }
}
foreach ($arr as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}
