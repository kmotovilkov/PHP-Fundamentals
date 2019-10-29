<?php

$num = intval(readline());

while (true) {
    if ($num % 2 === 0) {
        echo "The number is: " . abs($num);
        break;
    } else {
        echo "Please write an even number." . PHP_EOL;
    }
    $num = intval(readline());
}
