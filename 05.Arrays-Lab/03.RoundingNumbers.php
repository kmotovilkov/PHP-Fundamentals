<?php

$nums = array_map("floatval",
    explode(" ", readline()));
foreach ($nums as $num) {
    $roundNum = round($num);
    printf("%.2f => %d" .
        PHP_EOL, $num, $roundNum);
}
