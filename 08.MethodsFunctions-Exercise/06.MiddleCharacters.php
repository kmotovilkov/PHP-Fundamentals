<?php

$input = readline();
middle($input);
function middle(string $input)
{
    $length = strlen($input);
    if ($length % 2 == 1) {
        $index = intval($length / 2);
        echo $input[$index];
    } else {
        $index = intval($length / 2);
        echo $input[$index - 1] . $input[$index];
    }
}
