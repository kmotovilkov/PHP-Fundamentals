<?php

$grade = floatval(readline());

function gradeIs($grade)
{
    $rating = "";
    if ($grade >= 2.00 && $grade <= 2.99) {
        $rating = "Fail";
    } else if ($grade >= 3.00 && $grade <= 3.49) {
        $rating = "Poor";
    } else if ($grade >= 3.50 && $grade <= 4.49) {
        $rating = "Good";
    } else if ($grade >= 4.50 && $grade <= 5.49) {
        $rating = "Very good";
    } else if ($grade >= 5.50 && $grade <= 6.00) {
        $rating = "Excellent";
    }
    echo $rating;
}

gradeIs($grade);
