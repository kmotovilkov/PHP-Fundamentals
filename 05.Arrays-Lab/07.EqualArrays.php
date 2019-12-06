<?php

$arr1 = array_map("intval",
    explode(" ", readline()));
$arr2 = array_map("intval",
    explode(" ", readline()));
$sumArr = 0;
$areIdentical = true;

for ($i = 0; $i < count($arr1); $i++) {
    if ($arr1[$i] != $arr2[$i]) {
        echo "Arrays are not identical. Found difference at $i index.";
        $areIdentical = false;
        return;
    } else {
        $sumArr += $arr1[$i];
    }
}
if ($areIdentical) {
    echo "Arrays are identical. Sum: $sumArr";
}
