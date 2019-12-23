<?php

$arr1 = array_map("intval", explode(" ", readline()));
$arr2 = array_map("intval", explode(" ", readline()));

$arr3 = [];

for ($i = 0; $i < min(count($arr1), count($arr2)); $i++) {
    echo $arr1[$i] . " " . $arr2 [$i] . " ";
}
if (count($arr1) >= count($arr2)) {
    $arr3 = $arr1;
} else {
    $arr3 = $arr2;
}
for ($j = $i; $j < max(count($arr1), count($arr2)); $j++) {
    echo $arr3[$j] . " ";
}
