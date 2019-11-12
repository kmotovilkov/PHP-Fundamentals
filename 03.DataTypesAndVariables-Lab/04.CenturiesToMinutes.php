<?php

$centuries = intval(readline());

$years = $centuries * 100;
$days = floor($years * 365.2422);
$hours = floor($days * 24);
$minutes = floor($hours * 60);

echo "$centuries centuries = $years years = $days days = $hours hours = $minutes minutes";
