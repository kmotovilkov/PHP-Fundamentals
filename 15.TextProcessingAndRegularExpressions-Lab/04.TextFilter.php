<?php

$words = explode(", ", readline());
$text = readline();

foreach ($words as $word) {
    $count = strlen($word);
    $replacement = str_repeat("*", $count);
    $text = str_replace($word, $replacement, $text);
}
echo $text;
