<?php

$events = explode("|", readline());
$eventsCount = count($events);
$energy = 100;
$coins = 100;

for ($i = 0; $i < $eventsCount; $i++) {

    $args = explode("-", $events[$i]);
    $event = $args[0];
    $number = intval($args[1]);

    if ($event == "rest") {
        if (($energy + $number) > 100) {
            $healed = 100 - $energy;
            $energy = 100;
            echo "You gained $healed energy." . PHP_EOL;
        } else {
            $energy += $number;
            echo "You gained $number energy." . PHP_EOL;
        }
        echo "Current energy: $energy." . PHP_EOL;
    } else if ($event == "order") {
        if (($energy - 30) >= 0) {
            $coins += $number;
            $energy -= 30;
            echo "You earned $number coins." . PHP_EOL;
        } else {
            if (($energy + 50) > 100) {
                $energy = 100;
            } else {
                $energy += 50;
            }
            echo "You had to rest!" . PHP_EOL;
        }
    } else {
        $coins -= $number;
        if ($coins > 0) {
            echo "You bought $event." . PHP_EOL;

        } else {
            echo "Closed! Cannot afford $event." . PHP_EOL;
            break;
        }
    }
}
if ($coins > 0) {
    echo "Day completed!" . PHP_EOL;
    echo "Coins: $coins" . PHP_EOL;
    echo "Energy: $energy" . PHP_EOL;
}
