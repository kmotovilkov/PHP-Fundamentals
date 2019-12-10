<?php

$n = intval(readline());
$names = [];
$numbers = [];

for ($i = 0; $i < $n; $i++) {
    $names[] = readline();
    $sum = 0;
    foreach ($names as $name) {

    }
    for ($j = 0; $j < strlen($name); $j++) {
        $currentChar = $name[$j];
        $length = strlen($name);
        if ($currentChar == "a" || $currentChar == "A" || $currentChar == "e" || $currentChar == "E" || $currentChar == "i" ||
            $currentChar == "I" || $currentChar == "o" || $currentChar == "O" || $currentChar == "u" || $currentChar == "U") {
            $sum += ord($currentChar) * $length;
        } else {
            $sum += floor(ord($currentChar) / $length);
        }
    }
    $numbers[] = $sum;
}

asort($numbers);

foreach ($numbers as $number) {
    echo $number . PHP_EOL;
}
