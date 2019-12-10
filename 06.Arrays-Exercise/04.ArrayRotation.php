<?php

$array = explode(" ", readline());
$rotations = intval(readline());


for ($i = 0; $i < $rotations; $i++) {
    $temp = $array[0];
    for ($j = 1; $j < count($array); $j++) {
        $array[$j - 1] = $array[$j];
    }
    $array[count($array) - 1] = $temp;
}
echo implode(" ", $array);
