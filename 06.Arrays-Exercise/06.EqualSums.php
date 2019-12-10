<?php

$array = array_map("intval", explode(" ", readline()));

if (count($array) == 1) {
    echo 0;
    return;
}
for ($i = 0; $i < count($array); $i++) {
    $current = $array[$i];
    $sumL = 0;
    $sumR = 0;
    for ($j = 0; $j < $i; $j++) {
        $sumL += $array[$j];
    }
    for ($m = $i + 1; $m < count($array); $m++) {
        $sumR += $array[$m];
    }
    if ($sumL == $sumR) {
        echo $i;
        return;
    }
}
echo "no";
