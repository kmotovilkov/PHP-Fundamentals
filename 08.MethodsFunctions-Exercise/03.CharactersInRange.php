<?php

$char1 = readline();
$char2 = readline();
$start = ord($char1);
$end = ord($char2);

if ($start > $end) {
    $end = $start;
    $start = ord($char2);
}
printBetween($start, $end);
function printBetween(int $start, int $end)
{
    for ($i = $start + 1; $i < $end; $i++) {
        echo chr($i) . " ";
    }
}
