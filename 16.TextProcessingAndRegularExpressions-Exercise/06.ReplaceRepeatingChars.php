<?php

$text = readline();
$output = [];
$last = "";
for ($i = 0; $i < strlen($text) - 1; $i++) {
    if ($text[$i] !== $text[$i + 1]) {
        $output[] = $text[$i];
    }
    $last = $text[strlen($text) - 1];
}
echo implode($output) . $last;
