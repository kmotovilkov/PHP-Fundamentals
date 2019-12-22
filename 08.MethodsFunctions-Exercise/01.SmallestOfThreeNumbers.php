<?php

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());

smallest($num1, $num2, $num3);

function smallest(int $n1, int $n2, int $n3)
{
    if ($n1 <= $n2) {
        if ($n1 <= $n3) {
            echo $n1;
        } else {
            echo $n3;
        }
    } else if ($n2 <= $n1) {
        if ($n2 <= $n3) {
            echo $n2;
        } else {
            echo $n3;
        }
    }

}
