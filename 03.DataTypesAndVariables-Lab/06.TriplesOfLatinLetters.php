<?php

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        for ($m = 0; $m < $n; $m++) {
            echo chr(97 + $i);
            echo chr(97 + $j);
            echo chr(97 + $m) . PHP_EOL;
        }
    }
}
