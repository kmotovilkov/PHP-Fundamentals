<?php

$r = floatval(readline());
$area = pi() * pow($r, 2);
$area = number_format($area, 12, ".", "");
echo $area;
