<?php

$num = intval(readline());
matrix($num);
function matrix(int $number)
{
    for ($i = 0; $i < $number; $i++) {
        for ($j = 1; $j < $number; $j++) {
            echo $number . " ";
        }
        echo $number . " " . PHP_EOL;
    }
}
