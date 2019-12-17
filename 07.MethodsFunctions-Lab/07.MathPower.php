<?php

$num = (double)readline();
$degree = (double)readline();

mathPower($num, $degree);

function mathPower($num, $degree)
{
    $result = pow($num, $degree);
    echo $result;
}
