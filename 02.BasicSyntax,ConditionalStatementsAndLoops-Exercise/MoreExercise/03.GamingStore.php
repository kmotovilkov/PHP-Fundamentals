<?php
$balance = floatval(readline());
$input = readline();

$spend = 0;

while ($input != "Game Time") {
    $game = readline();
    $price = 0;
    switch ($game) {
        case "OutFall 4":
            $price = 39.99;
            break;
        case "CS: OG":
            $price = 15.99;
            break;
        case "Zplinter Zell":
            $price = 19.99;
            break;
        case "Honored 2":
            $price = 59.99;
            break;
        case "RoverWatch":
            $price = 29.99;
            break;
        case "RoverWatch Origins Edition":
            $price = 39.99;
            break;
        default:
            echo "Not Found" . PHP_EOL;
            continue;
    }

    if ($price > $balance) {
        echo "Too Expensive" . PHP_EOL;
        continue;
    }
    $balance -= $price;
    $spend += $price;
    echo "Bought $game" . PHP_EOL;

    if ($balance == 0) {
        echo "Out of money";
        return;
    }

}
printf("Total spent: $%.2f. Remaining: $%.2f", $spend, $balance);
