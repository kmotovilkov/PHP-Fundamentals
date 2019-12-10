<?php

$size = intval(readline());
$position = array_map("intval", explode(" ", readline()));
$field = [];

for ($i = 0; $i < $size; $i++) {
    if (in_array($i, $position)) {
        $field[$i] = 1;
    } else {
        $field[$i] = 0;
    }
}
$line = readline();

while ($line != "end") {
    $input = explode(" ", $line);
    $ladybugToMove = intval($input[0]);
    if ($ladybugToMove < 0 || $ladybugToMove >= $size || $field[$ladybugToMove] == 0) {
        $line = readline();
        continue;
    }
    $command = $input[1];
    $length = intval($input[2]);

    $field[$ladybugToMove] = 0;

    if ($command == "left") {
        $nextPos = $ladybugToMove - $length;
        while ($nextPos >= 0 && $field[$nextPos] == 1) {
            $nextPos -= $length;
        }
        if ($nextPos >= 0) {
            $field[$nextPos] = 1;
        } else if ($command == "right") {
            $nextPos = $ladybugToMove + $length;
            while ($nextPos < $size && $field[$nextPos] == 1) {
                $nextPos += $length;
            }
            if ($nextPos < $size) {
                $field[$nextPos] = 1;
            }
        }
    }

    $line = readline();
}
echo implode(" ", $field);
