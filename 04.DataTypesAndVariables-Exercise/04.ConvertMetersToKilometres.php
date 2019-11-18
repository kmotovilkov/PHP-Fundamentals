<?php

$metersNum = intval(readline());
$kilometersNum = $metersNum / 1000;
$kilometersNum = number_format($kilometersNum, 2, ".", "");
echo $kilometersNum;
