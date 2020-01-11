<?php

$input = readline();
$strength = 0;

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];
    if ($char == ">" && $i < strlen($input) - 1 && is_numeric($input[$i + 1])) {
        $strength += intval($input[$i + 1]);

    } else {
        if ($strength > 0) {
            $input = substr_replace($input, "", $i, 1);
            $strength--;
            $i--;
        }
    }
}

echo $input;
