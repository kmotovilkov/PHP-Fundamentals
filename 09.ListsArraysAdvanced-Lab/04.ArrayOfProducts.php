<?php
$n = intval(readline());
$arr = [];
for ($i = 0; $i < $n; $i++) {
    $element = readline();
    $arr[] = $element;
}
sort($arr);
foreach ($arr as $i => $sortArr) {
    $number = $i + 1;
    echo "$number.$sortArr" . PHP_EOL;
}
