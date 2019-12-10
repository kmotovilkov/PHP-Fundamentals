<?php

$n = intval(readline());
$array1 = [];
$array2 = [];

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    if ($i % 2 == 0) {
        $array1[] = $input[1];
        $array2[] = $input[0];
    } else {
        $array1[] = $input[0];
        $array2[] = $input[1];
    }
}
echo implode(" ", $array2) . PHP_EOL;
echo implode(" ", $array1);
