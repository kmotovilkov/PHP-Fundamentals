<?php

$shops = explode(" ", readline());

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {

    $args = explode(" ", readline());
    $commands = $args[0];

    if ($commands == "Include") {
        $shop = $args[1];
        $shops[] = $shop;
    } else if ($commands == "Visit") {
        $order = $args[1];
        $number = $args[2];
        $count = count($shops);
        if ($number <= $count) {
            if ($order == "first") {
                array_splice($shops, 0, $number);
            } else if ($order == "last") {
                array_splice($shops, $count - $number, $number);
            }
        }
    } else if ($commands == "Prefer") {
        $shopIndex1 = $args[1];
        $shopIndex2 = $args[2];
        if (array_key_exists($shopIndex1, $shops) == true
            && array_key_exists($shopIndex2, $shops) == true) {
            $shop1 = $shops[$shopIndex1];
            $shop2 = $shops[$shopIndex2];
            array_splice($shops, $shopIndex1, 1, $shop2);
            array_splice($shops, $shopIndex2, 1, $shop1);
        }
    } else if ($commands == "Place") {
        $shop = $args[1];
        $index = $args[2];
        $count = count($shops);
        if (($index + 1) <= $count) {
            array_splice($shops, $index + 1, 0, $shop);
        }
    }

}
echo "Shops left:" . PHP_EOL;
echo implode(" ", $shops);




/*
 Problem 3. Easter Shopping
You have decided to go on an Easter shopping spree to take advantage of the promotions.
Create a program that helps you keep track of the shops that you want to visit. You will receive the list of shops you have planned on checking out on a single line, separated by a single space in the following format:
"{shop1} {shop2} {shop3}… {shopn}"
Then you will receive a number – n - a count of commands you need to execute over your list. There are four possible commands:
•	"Include {shop}":
o	Add the shop at the end of your list.
•	"Visit {first/last} {numberOfShops}"
o	Remove either the "first" or the "last" number of shops from your list, depending on the input. If you have less shops on your list than the given number, skip this command.
•	"Prefer {shopIndex1} {shopIndex2}":
o	If both of the shop indexes exist in your list, take the shops that are on them and change their places.
•	"Place {shop} {shopIndex}"
o	Insert the shop after the given index, only if the resulted index exists.
In the end print the manipulated list in the following format:
"Shops left:
{shop1} {shop2}… {shopn}"
Input / Constraints
•	On the 1st line, you will receive the starting list with the names of the shops separated by a single space.
•	On the 2nd line, you will receive the number of commands - n – an integer in range [1…100]
•	On the next n lines you will be receiving commands in the format described above.
Output
•	Print the list after the manipulations in the format described above.
Examples
Input	Output
Bershka CandyStore ThriftShop Armani Groceries ToyStore PeakStore
5
Include HM
Visit first 2
Visit last 1
Prefer 3 1
Place Library 2
	                 Shops left:
                     ThriftShop ToyStore Groceries Library Armani PeakStore
Comments
First we receive the "Include" and the name of the store and we add the store to our list. The list should look like this: Bershka CandyStore ThriftShop Armani Groceries ToyStore PeakStore HM
After, we receive the "Visit" command and "first", which means we have to visit the first 2 stores, so we remove them from our list and the collection should look like this: ThriftShop Armani Groceries ToyStore PeakStore HM. After that, we receive the "Visit" command again, but this time we need to visit the "last" 1 store, so we remove it and the collection should look like this: ThriftShop Armani Groceries ToyStore PeakStore. After that we receive the "Prefer" command, which means we need to find the shop on the first given index – 3 and change it with the one that is on index – 1, and the collection should look like this: ThriftShop ToyStore Groceries Armani PeakStore. At last, we receive the "Place" command and we need to insert the shop at the next index after 2. And our final list looks like this:
ThriftShop ToyStore Groceries Library Armani PeakStore


Boutique Flowers CandyStore ThriftShop Versace Groceries ToyStore PeakStore
6
Visit first 9
Visit last 4
Prefer 3 8
Prefer 0 1
Place Store 7
Place ShoeAquarium 2

	                   Shops left:
                       Flowers Boutique CandyStore ShoeAquarium ThriftShop



 */
