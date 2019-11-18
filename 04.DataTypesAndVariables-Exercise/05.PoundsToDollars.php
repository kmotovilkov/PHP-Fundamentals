<?php

$pound = floatval(readline());
$course = 1.31;
$dollar = $pound * $course;
$dollar = number_format($dollar, 3, ".", "");
echo $dollar;
