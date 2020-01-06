<?php

$input = explode(" ", readline());
$numbers = [];

foreach ($input as $number) {
    if (!key_exists($number, $numbers)) {
        $numbers[$number] = 0;
    }
    $numbers[$number]++;
}
ksort($numbers);
foreach ($numbers as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}
