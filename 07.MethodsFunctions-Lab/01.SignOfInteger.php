<?php

$a = intval(readline());

function sign($a)
{
    if ($a > 0) {
        $result = "The number $a is positive.";
    } else if ($a < 0) {
        $result = "The number $a is negative.";
    } else {
        $result = "The number $a is zero.";
    }

    return $result;
}

echo sign($a);
