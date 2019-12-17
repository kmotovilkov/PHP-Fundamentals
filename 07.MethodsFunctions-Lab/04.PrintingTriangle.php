<?php

$input = intval(readline());

printTriangle($input);

function printLine($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "$i ";
    }
    echo " " . PHP_EOL;
}

function printTriangle($input)
{
    for ($j = 1; $j < $input; $j++) {
        printLine(1, $j);
    }
    printLine(1, $input);
    for ($k = $input - 1; $k >= 1; $k--) {
        printLine(1, $k);
    }
}
