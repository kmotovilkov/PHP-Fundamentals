<?php

$num = intval(readline());

$factorial = function ($num) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial = bcmul($factorial, $i);
    }
    return $factorial;
};

echo $factorial($num);
