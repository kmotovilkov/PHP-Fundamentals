<?php

$numbers = array_map("intval", explode(" ", readline()));

$oddNum = [];
$evenNum = [];
$odd = false;
while (true) {
    $commands = explode(" ", readline());
    if ($commands[0] == "Odd") {
        $odd = true;
        break;
    } else if ($commands[0] == "Even") {
        break;
    }

    if ($commands[0] == "Delete") {
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] == intval($commands[1]))
                unset($numbers[$i]);
        }

    } else if ($commands[0] == "Insert") {
        $element = intval($commands[1]);
        $index = $commands[2];
        array_splice($numbers, $index, 0, $element);
    }
    $numbers = array_values($numbers);
}
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $evenNum[] = intval($numbers[$i]);
    } else {
        $oddNum[] = intval($numbers[$i]);
    }
}
if ($odd) {
    echo implode(" ", $oddNum);

} else {
    echo implode(" ", $evenNum);
}
