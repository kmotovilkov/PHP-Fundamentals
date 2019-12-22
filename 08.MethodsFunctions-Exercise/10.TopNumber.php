<?php

$num = intval(readline());
topNumber($num);

function topNumber(int $num)
{
    for ($i = 1; $i <= $num; $i++) {
        $sum = 0;
        $odd = false;
        $a = $i;
        while (true) {
            if ($a == 0) {
                break;
            }
            $right = $a % 10;
            $sum += $right;
            if ($right % 2 != 0) {
                $odd = true;
            }
            $a /= 10;
        }
        if ($sum % 8 == 0 && $odd == true) {
            echo $i . PHP_EOL;
        }
    }
}
