<?php

$n = intval(readline());
$m = intval(readline());
$product = 0;

if ($m > 10) {
    echo "$n X $m = " . $n * $m;
} else {
    for ($i = $n; $i <= $n; $i++) {
        for ($j = $m; $j <= 10; $j++) {
            $product = $i * $j;
            echo "$i X $j = $product" . PHP_EOL;
        }
    }
}
