<?php

$arr = array_map("floatval", explode(" ", readline()));

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $arr[$i + 1]) {
        $el = $arr[$i] + $arr[$i + 1];
        $arr[$i] = $el;
        array_splice($arr, $i + 1, 1);
        $i = -1;
    }
}
echo implode(" ", $arr);
