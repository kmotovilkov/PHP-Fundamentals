<?php

$n = intval(readline());

$words = [];
$synonyms = [];
$arr = [];

for ($i = 0; $i < $n * 2; $i++) {
    if ($i % 2 == 0) {
        $words[] = readline();
    } else {
        $synonyms[] = readline();
    }
}
for ($j = 0; $j < $n; $j++) {
    if (!key_exists($words[$j], $arr)) {
        $arr[$words[$j]] = [];
    }
    $arr[$words[$j]][] = $synonyms[$j];
}

uksort($arr, function ($key1, $key2) use ($arr) {
    $synonymCount = count($arr[$key2]) <=> count($arr[$key1]);
    if ($synonymCount == 0) {
        return $key1 <=> $key2;
    } else {
        return $synonymCount;
    }
});
foreach ($arr as $key => $item) {
    echo "$key - ";
    echo implode(", ", $item) . PHP_EOL;
}
