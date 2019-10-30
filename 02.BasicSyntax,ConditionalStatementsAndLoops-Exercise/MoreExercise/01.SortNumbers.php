<?php

$arr = [];

for ($i = 0; $i < 3; $i++) {
    $n1 = intval(readline());
    $arr[] = $n1;
    arsort($arr);
}
foreach ($arr as $n) {
    echo $n . PHP_EOL;
}
