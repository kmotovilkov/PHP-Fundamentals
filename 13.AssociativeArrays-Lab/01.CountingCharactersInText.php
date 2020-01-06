<?php

$input = readline();

$arr = [];

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];

    if (!key_exists($char, $arr)) {
        $arr[$char] = 0;
    }
    $arr[$char]++;
}
foreach ($arr as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}
