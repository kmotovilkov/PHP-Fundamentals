<?php

$commands = intval(readline());
$namesIn = [];

for ($i = 0; $i < $commands; $i++) {

    $input = explode(" ", readline());

    if (count($input) == 3) {
        if (in_array($input[0], $namesIn) == false) {
            $namesIn[] = $input[0];
        } else {
            echo "$input[0] is already in the list!" . PHP_EOL;
        }
    } else if (count($input) == 4) {
        if (in_array($input[0], $namesIn)) {
            $index = array_search($input[0], $namesIn);
            array_splice($namesIn, $index, 1);
        } else {
            echo "$input[0] is not in the list!" . PHP_EOL;
        }
    }
}

foreach ($namesIn as $name) {
    echo $name . PHP_EOL;
}
