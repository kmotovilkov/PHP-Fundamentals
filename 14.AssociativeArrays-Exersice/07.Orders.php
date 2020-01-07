<?php

$input = readline();

$productsQuantity = [];
$productsPrice = [];

while ($input != "buy") {
    $args = explode(" ", $input);
    $productName = $args[0];
    $productPrice = $args[1];
    $productQuantity = $args[2];

    $productsPrice[$productName] = $productPrice;
    if (!key_exists($productName, $productsQuantity)) {
        $productsQuantity[$productName] = $productQuantity;
    } else {
        $productsQuantity[$productName] += $productQuantity;
    }
    
    $input = readline();
}
foreach ($productsPrice as $product => $price) {

    $total = $price * $productsQuantity[$product];
    printf("$product -> %.2f" . PHP_EOL, $total);

}
