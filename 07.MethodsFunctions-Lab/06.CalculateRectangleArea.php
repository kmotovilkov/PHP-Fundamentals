<?php

$width = intval(readline());
$length = intval(readline());

calculatesArea($width, $length);

function calculatesArea($width, $length)
{
    $result = $width * $length;
    echo $result;
}
