<?php

$coins = readline();

$sum = 0;
$price = 0;

while ($coins != "Start") {
    switch ($coins) {
        case "0.1":
            $sum += (float)$coins;
            break;
        case "0.2":
            $sum += (float)$coins;
            break;
        case "0.1":
            $sum += (float)$coins;
            break;
        case "0.5":
            $sum += (float)$coins;
            break;
        case "1":
            $sum += (float)$coins;
            break;
        case "2":
            $sum += (float)$coins;
            break;
        default:
            echo "Cannot accept $coins" . PHP_EOL;

    }
    $coins = readline();
}
$products = readline();

while ($products != "End") {

    switch ($products) {
        case "Nuts":
            $price = (float)2.0;
            if ($price <= $sum) {
                $sum -= (float)2.0;
                echo "Purchased " . strtolower($products) . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
            }
            break;
        case "Water":
            $price = (float)0.7;
            if ($price <= $sum) {
                $sum -= (float)0.7;
                echo "Purchased " . strtolower($products) . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
            }
            break;
        case "Crisps":
            $price = (float)1.5;
            if ($price <= $sum) {
                $sum -= (float)1.5;
                echo "Purchased " . strtolower($products) . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
            }
            break;
        case "Soda":
            $price = (float)0.7 + 0.1;
            if ($price <= $sum) {
                $sum -= (float)0.7 + 0.1;
                echo "Purchased " . strtolower($products) . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
            }
            break;
        case "Coke":
            $price = (float)1.0;
            if ($price <= $sum) {
                $sum -= (float)1.0;
                echo "Purchased " . strtolower($products) . PHP_EOL;
            } else {
                echo "Sorry, not enough money" . PHP_EOL;
            }
            break;
        default:
            echo "Invalid product" . PHP_EOL;

    }
    $products = readline();

}
printf("Change: %.2f", $sum);
