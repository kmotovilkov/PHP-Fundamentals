<?php
$num = intval(readline());
$groupType = readline();
$day = readline();

if ($day === "Friday") {
    if ($groupType === "Students") {
        $price = 8.45;
    } else if ($groupType === "Business") {
        $price = 10.90;
    } else if ($groupType === "Regular") {
        $price = 15.00;
    }
} else if ($day === "Saturday") {
    if ($groupType === "Students") {
        $price = 9.80;
    } else if ($groupType === "Business") {
        $price = 15.60;
    } else if ($groupType === "Regular") {
        $price = 20.00;
    }
} else if ($day === "Sunday") {
    if ($groupType === "Students") {
        $price = 10.46;
    } else if ($groupType === "Business") {
        $price = 16.00;
    } else if ($groupType === "Regular") {
        $price = 22.50;
    }
}
$sumPrice = $num * $price;
if ($groupType === "Business" && $num >= 100) {
    $totalPrice = ($num - 10) * $price;
} else if ($groupType === "Students" && $num >= 30) {
    $totalPrice = $sumPrice - ($sumPrice * 0.15);
} else if ($groupType === "Regular" && $num >= 10 && $num <= 20) {
    $totalPrice = $sumPrice - ($sumPrice * 0.5);
} else {
    $totalPrice = $sumPrice;
}
printf("Total price: %.2f", $totalPrice);

