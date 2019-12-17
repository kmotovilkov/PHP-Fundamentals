<?php

$input = readline();
$n = intval(readline());

repeatString($input, $n);

function repeatString($input, $n)
{
    $result = "";
    for ($i = 0; $i < $n; $i++) {
        $result = str_repeat($input, $n);
    }
    echo $result;
}
