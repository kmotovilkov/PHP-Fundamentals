<?php


$word = readline();
$reverseWord = "";

while (true) {
    if ($word === "end") {
        break;
    }

    $reverseWord = strrev($word);
    echo "$word = $reverseWord" . PHP_EOL;
    $word = readline();
}
