<?php

$wagons = intval(readline());
$array = [];
$bestSum = 0;

for ($i = 0; $i < $wagons; $i++) {
    $people = intval(readline());
    $array[$i] = $people;
    $bestSum += $people;
}
echo implode(" ", $array) . PHP_EOL;
echo $bestSum;
