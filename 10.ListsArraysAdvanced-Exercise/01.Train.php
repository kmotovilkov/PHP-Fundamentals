<?php
$numbers = array_map("intval", explode(" ", readline()));
$maxCapacity = intval(readline());

while (true) {
    $input = readline();
    if ($input == "end") {
        break;
    }
    $token = explode(" ", $input);
    if ($token[0] == "Add") {
        $wagon = intval($token[1]);
        if ($wagon <= $maxCapacity) {
            $numbers[] = $wagon;
        }
    } else {
        $passengers = intval($token[0]);
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] + $passengers <= $maxCapacity) {
                $numbers[$i] += $passengers;
                break;
            }
        }
    }
}
echo implode(" ", $numbers);
