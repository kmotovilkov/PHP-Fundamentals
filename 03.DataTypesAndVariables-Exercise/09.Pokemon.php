<?php

$power = intval(readline());
$distance = intval(readline());
$factor = intval(readline());
$divide = $power / 2.0;
$count = 0;

while ($power >= $distance) {
    $power -= $distance;
    $count++;
    if ($divide == $power && $factor != 0) {
        $power /= $factor;

    }

}
echo intval($power) . PHP_EOL . $count;
