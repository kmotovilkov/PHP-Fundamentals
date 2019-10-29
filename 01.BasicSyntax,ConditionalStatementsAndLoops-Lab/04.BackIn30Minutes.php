<?php

$hours = intval(readline());
$minutes = intval(readline()) + 30;

if ($minutes >= 60) {
    $hours++;
    $minutes -= 60;
}
if ($hours >= 24) {
    $hours -= 24;
}
printf("$hours:%02d", $minutes);
