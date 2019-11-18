<?php


$lines = 3;
$output = " ";

for ($i = 0; $i < $lines; $i++) {
    $input = readline();
    if ($i == 2) {
        $output .= $input;
    } else {
        $output .= $input . " ";
    }
}
echo strrev($output);
