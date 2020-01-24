<?php

$people = intval(readline());
$days = intval(readline());
$dayMoney = 50 * $days;

for ($i = 1; $i <= $days; $i++) {
    if ($i % 15 == 0) {
        $people += 5;
    }
    if ($i % 10 == 0) {
        $people -= 2;
    }
    if ($i % 5 == 0) {
        $dayMoney += $people * 20;
        if ($i % 3 == 0) {
            $dayMoney -= $people * 2;
        }
    }
    if ($i % 3 == 0) {
        $dayMoney -= $people * 3;
    }
    $dayMoney -= $people * 2;
}

$personMoney=intval($dayMoney/$people);
echo "$people companions received $personMoney coins each.";


/*Problem 1. Party Profit
As a young adventurer, you travel with your party around the world, seeking for gold and glory. But you need to split the profit among your companions.
You will receive a party size. After that you receive the days of the adventure.
Every day, you are earning 50 coins, but you also spent 2 coin per companion for food.
                                                                                 Every 3rd (third) day, you have a motivational party, spending 3 coins per companion for drinking water.
Every 5th (fifth) day you slay a boss monster and you gain 20 coins per companion. But if you have a motivational party the same day, you spent additional 2 coins per companion.
Every 10th (tenth) day at the start of the day, 2 (two) of your companions leave, but every 15th (fifteenth) day 5 (five) new companions are joined at the beginning of the day.
You have to calculate how much coins gets each companion at the end of the adventure.
Input / Constraints
The input will consist of exactly 2 lines:
•	party size – integer in range [1…100]
•	days – integer in range [1…100]
Output
Print the following message: "{companionsCount} companions received {coins} coins each."
You cannot split a coin, so take the integral part (round down the coins to integer number).
Examples
Input	Output
3
5
	3 companions received 90 coins each.
Input	Output
15
30	19 companions received 102 coins each.
...Each companion has a distinct personality and values...
*/
