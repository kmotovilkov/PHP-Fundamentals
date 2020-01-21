<?php

$budget = floatval(readline());
$students = intval(readline());
$flour = floatval(readline());
$egg = floatval(readline());
$apron = floatval(readline());

$flourPrice = $flour * ($students - floor($students / 5));
$eggPrice = ($egg * 10) * $students;
$aprons = $apron * (ceil($students + ($students * 0.20)));

$price = $flourPrice + $eggPrice + $aprons;

if ($budget >= $price) {
    printf("Items purchased for %.2f$.", $price);
} else {
    $diff = $price - $budget;
    printf("%.2f$ more needed.", $diff);
}
