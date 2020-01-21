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


/*Problem 2. Bread Factory
As a young baker, you are baking the bread out of the bakery. 
You have initial energy 100 and initial coins 100. You will be given a string, representing the working day events. Each event is separated with '|' (vertical bar): "event1|event2|event3…"
Each event contains event name or item and a number, separated by dash("{event/ingredient}-{number}")
•	If the event is "rest": you gain energy, the number in the second part. But your energy cannot exceed your initial energy (100). Print: "You gained {0} energy.". 
After that, print your current energy: "Current energy: {0}.".
•	If the event is "order": You've earned some coins, the number in the second part. Each time you get an order, your energy decreases with 30 points.
o	If you have energy to complete the order, print: "You earned {0} coins.".
o	If your energy drops below 0, you skip the order and gain 50 energy points. Print: "You had to rest!".
•	In any other case you are having an ingredient, you have to buy. The second part of the event, contains the coins you have to spent and remove from your coins. 
o	If you are not bankrupt (coins <= 0) you've bought the ingredient successfully, and you should print ("You bought {ingredient}.")
o	If you went bankrupt, print "Closed! Cannot afford {ingredient}." and your bakery rush is over. 
If you managed to handle all events through the day, print on the next three lines: 
"Day completed!", "Coins: {coins}", "Energy: {energy}".
Input / Constraints
You receive a string, representing the working day events, separated with '|' (vertical bar): " event1|event2|event3…".
Each event contains event name or ingredient and a number, separated by dash("{event/ingredient}-{number}")
Output
Print the corresponding messages, described above.
Examples
Input	Output
rest-2|order-10|eggs-100|rest-10 	You gained 0 energy.
Current energy: 100.
You earned 10 coins.
You bought eggs.
You gained 10 energy.
Current energy: 80.
Day completed!
Coins: 10
Energy: 80
Input	Output
order-10|order-10|order-10|flour-100|order-100|oven-100|order-1000	You earned 10 coins.
You earned 10 coins.
You earned 10 coins.
You bought flour.
You had to rest!
Closed! Cannot afford oven.
... 1 package (1/4 ounce) active dry yeast
2-1/4 cups warm water (110° to 115°)
3 tablespoons sugar
1 tablespoon salt
2 tablespoons canola oil
6-1/4 to 6-3/4 cups all-purpose flour ...
*/
