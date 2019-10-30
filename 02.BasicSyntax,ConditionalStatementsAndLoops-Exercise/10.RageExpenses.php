<?php

$lostGame = intval(readline());
$headsPrice = floatval(readline());
$mousePrice = floatval(readline());
$keybPrice = floatval(readline());
$dispPrice = floatval(readline());


$headsBroken = 0;
$mouseBroken = 0;
$keybBroken = 0;
$dispBroken = 0;

while ($lostGame > 0) {
    if ($lostGame % 2 == 0) {
        $headsBroken++;
    }
    if ($lostGame % 3 == 0) {
        $mouseBroken++;
    }
    if ($lostGame % 6 == 0) {
        $keybBroken++;
    }
    if ($lostGame % 12 == 0) {
        $dispBroken++;
    }
    $lostGame--;
}
$headsSum = $headsPrice * $headsBroken;
$mouseSum = $mousePrice * $mouseBroken;
$keybSum = $keybPrice * $keybBroken;
$dispSum = $dispPrice * $dispBroken;

$totalSum = $headsSum + $mouseSum + $keybSum + $dispSum;

printf("Rage expenses: %.2f lv.", $totalSum);
