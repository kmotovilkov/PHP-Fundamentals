<?php

$num = array_map("intval",
    explode(" ", readline()));

$num1 = count($num);
while ($num1 > 1) {
    for ($i = 0; $i < count($num) - 1; $i++) {
        $num[$i] += $num[$i + 1];
    }
    $num1--;
}
echo $num[0];
