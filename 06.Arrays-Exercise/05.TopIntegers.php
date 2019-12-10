<?php

$array = explode(" ", readline());
$result = [];

for ($i = 0; $i < count($array); $i++) {
    $bigger = true;
    $current = $array[$i];
    for ($j = $i + 1; $j < count($array); $j++) {
        $next = $array[$j];
        if ($current <= $next) {
            $bigger = false;
        }
    }
    if ($bigger) {
        $result[] = $current;
    }
}
echo implode(" ", $result);
