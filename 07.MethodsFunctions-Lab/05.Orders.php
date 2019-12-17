<?php

$products = strtolower(readline());
$quantity = intval(readline());

productPrice($products, $quantity);

function productPrice($products, $quantity)
{
    $totalPrice = 0;
    
    if ($products == "coffee") {
        $price = 1.50;
    } else if ($products == "water") {
        $price = 1.00;
    } else if ($products == "coke") {
        $price = 1.40;
    } else if ($products == "snacks") {
        $price = 2.00;
    }
    $totalPrice = $quantity * $price;

    printf("%.2f", $totalPrice);
}
