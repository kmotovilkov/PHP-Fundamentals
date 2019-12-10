<?php

$numbers = array_map("intval", explode(" ", readline()));
$sumNumbers = intval(readline());

for ($i = 0; $i < count($numbers); $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] + $numbers[$j] == $sumNumbers) {
            echo $numbers[$i] . " " . $numbers[$j] . PHP_EOL;
        }
    }
}
