<?php

$firstNum = intval(readline());
$secondNum = intval(readline());
$thirdNum = intval(readline());
$fourthNum = intval(readline());

$output = $firstNum + $secondNum;
$output = (int)($output / $thirdNum) * $fourthNum;
echo $output;
