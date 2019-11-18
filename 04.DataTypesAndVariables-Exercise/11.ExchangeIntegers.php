<?php

$a = intval(readline());
$b = intval(readline());

echo "Before:" . PHP_EOL . "a = $a" . PHP_EOL . "b = $b" . PHP_EOL;

$c = $a;
$a = $b;
$b = $c;

echo "After:" . PHP_EOL . "a = $a" . PHP_EOL . "b = $b" . PHP_EOL;
