<?php

$rooms = explode("|", readline());
$roomCount = count($rooms);
$health = 100;
$money = 0;

for ($i = 0; $i < $roomCount; $i++) {
    $args = explode(" ", $rooms[$i]);
    $command = $args[0];
    $number = $args[1];

    if ($command === "potion") {
        if ($health + $number > 100) {
            $healed = 100 - $health;
            $health = 100;
            echo "You healed for $healed hp." . PHP_EOL;
        } else {
            $health += $number;
            echo "You healed for $number hp." . PHP_EOL;
        }

        echo "Current health: $health hp." . PHP_EOL;

    } else if ($command === "chest") {
        $money += intval($number);
        echo "You found $number coins." . PHP_EOL;
    } else {
        if ($health - $number > 0) {
            $health -= $number;
            echo "You slayed $command." . PHP_EOL;
        } else {
            $health -= $number;
            echo "You died! Killed by $command." . PHP_EOL;
            $room = $i + 1;
            echo "Best room: $room" . PHP_EOL;
            break;
        }
    }
}
if ($health > 0) {
    echo "You've made it!" . PHP_EOL;
    echo "Coins: $money" . PHP_EOL;
    echo "Health: $health";
}



/*Problem 2. Dungeonest Dark
As a young adventurer, you seek gold and glory in the darkest dungeons there are.
You have initial health 100 and initial coins 0. You will be given a string, representing the dungeons rooms. Each room is separated with '|' (vertical bar): "room1|room2|room3…"
Each room contains item or a monster and a number, separated by space. ("item/monster number")
•	If the first part is "potion": you are healed with the number in the second part. But your health cannot exceed your initial health (100). Print: "You healed for {0} hp.".
After that, print your current health: "Current health: {0} hp.".
•	If the first part is "chest": You've found some coins, the number in the second part. Print: "You found {0} coins.".
•	In any other case you are facing a monster, you are going to fight. The second part of the room, contains the attack of the monster. You should remove the monster's attack from your health.
o	If you are not dead (health <= 0) you've slain the monster, and you should print ("You slayed {monster}.")
o	If you've died, print "You died! Killed by {monster}." and your quest is over. Print the best room you`ve manage to reach: "Best room: {room}".
If you managed to go trough all the rooms in the dungeon, print on the next three lines:
"You've made it!", "Coins: {coins}", "Health: {health}".
Input / Constraints
You receive a string, representing the dungeons rooms, separated with '|' (vertical bar): "room1|room2|room3…".
Output
Print the corresponding messages, described above.
Examples
Input	Output
rat 10|bat 20|potion 10|rat 10|chest 100|boss 70|chest 1000	You slayed rat.
You slayed bat.
You healed for 10 hp.
Current health: 80 hp.
You slayed rat.
You found 100 coins.
You died! Killed by boss.
Best room: 6
Input	Output
cat 10|potion 30|orc 10|chest 10|snake 25|chest 110	You slayed cat.
You healed for 10 hp.
Current health: 100 hp.
You slayed orc.
You found 10 coins.
You slayed snake.
You found 110 coins.
You've made it!
Coins: 120
Health: 65
...! a game where every hero wins the day with shiny armor and a smile...
*/
