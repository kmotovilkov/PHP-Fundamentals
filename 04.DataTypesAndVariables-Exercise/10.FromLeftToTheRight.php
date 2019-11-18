<?php

$leftNum = "";

$lines = intval(readline());
for ($i = 0; $i < $lines; $i++) {
    $input = explode(" ", readline());
    $leftNum = $input[0];
    $rightNum = $input[1];

    print_r($leftNum) . PHP_EOL;
}

