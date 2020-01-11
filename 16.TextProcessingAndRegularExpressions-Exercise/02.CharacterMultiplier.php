<?php

$text = explode(" ", readline());
$firstWord = $text[0];
$secondWord = $text[1];
$sum = 0;
$long = "";
$short = "";
$diff = 0;

if (strlen($firstWord) > strlen($secondWord)) {
    $long = $firstWord;
    $short = $secondWord;
} else {
    $long = $secondWord;
    $short = $firstWord;
}

for ($i = 0; $i < strlen($short); $i++) {
    $sum += ord($short[$i]) * ord($long[$i]);
}
for ($j = strlen($short); $j < strlen($long); $j++) {
    $diff += ord($long[$j]);
}
echo $sum + $diff;
