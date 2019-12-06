<?php

$n = intval(readline());
$arr = [];

for ($i = 0; $i < $n; $i++) {
    $arr[$i] = intval(readline());
}
$arr = array_reverse($arr);
echo implode(" ", $arr);
