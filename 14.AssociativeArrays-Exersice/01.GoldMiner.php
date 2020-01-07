<?php

$input = readline();
$gold = [];

while ($input != "stop") {
    $str = readline($input);
    if (!key_exists($input, $gold)) {
        $gold[$input] = $str;
    } else {
        $gold[$input] +=$str;
    }
    $input = readline();
}
foreach ($gold as $goldType => $goldQuality) {
    echo "$goldType -> $goldQuality" . "K" . PHP_EOL;
}
