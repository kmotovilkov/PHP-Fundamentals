<?php

$action = readline();

$a = intval(readline());
$b = intval(readline());

calculator($action, $a, $b);

function calculator(string $action, int $a, int $b)
{

    if ($action == "add") {
        $result = $a + $b;
    } else if ($action == "multiply") {
        $result = $a * $b;
    } else if ($action == "subtract") {
        $result = $a - $b;
    } else if ($action == "divide") {
        $result = $a / $b;
    }
    echo $result;
}
