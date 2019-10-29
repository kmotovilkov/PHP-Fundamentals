<?php

$day = readline();
$age = intval(readline());

if ($age >= 0 && $age <= 18) {
    if ($day === "Weekday") {
        echo "12$";
    } else if ($day === "Weekend") {
        echo "15$";
    } else if ($day === "Holiday") {
        echo "5$";
    }
} else if ($age > 18 && $age <= 64) {
    if ($day === "Weekday") {
        echo "18$";
    } else if ($day === "Weekend") {
        echo "20$";
    } else if ($day === "Holiday") {
        echo "12$";
    }
} else if ($age > 64 && $age <= 122) {
    if ($day === "Weekday") {
        echo "12$";
    } else if ($day === "Weekend") {
        echo "15$";
    } else if ($day === "Holiday") {
        echo "10$";
    }
} else {
    echo "Error!";

}

