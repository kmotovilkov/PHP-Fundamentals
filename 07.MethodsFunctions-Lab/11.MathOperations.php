<?php

$firstNumber = intval(readline());
$operator = readline();
$secondNumber = intval(readline());

mathOperations($firstNumber, $secondNumber, $operator);

function mathOperations($firstNumber, $secondNumber, $operator)
{
    $result = 0;
    if ($operator == "/") {
        $result = $firstNumber / $secondNumber;
    } else if ($operator == "*") {
        $result = $firstNumber * $secondNumber;
    } else if ($operator == "+") {
        $result = $firstNumber + $secondNumber;
    } else if ($operator == "-") {
        $result = $firstNumber - $secondNumber;
    }
    printf("%.2f", $result);
}
