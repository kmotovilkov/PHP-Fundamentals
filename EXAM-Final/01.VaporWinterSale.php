<?php

$input = explode(", ", readline());
$games = [];
$gameDLC = [];

foreach ($input as $item) {

    $args = explode("-", $item);

    if (count($args) == 2) {
        $nameGame = $args[0];
        $price = $args[1];
        $games[$nameGame] = $price;
    } else {
        $args = explode(":", $item);
        $nameGame = $args[0];
        $DLC = $args[1];
        if (key_exists($nameGame, $games)) {
            $gameDLC[$nameGame] = $DLC;
            $games[$nameGame] *= 1.2;
        }
    }

}
foreach ($games as $game => $price) {
    if (key_exists($game, $gameDLC)) {
        $games[$game] *= 0.5;

    } else {
        $games[$game] *= 0.8;
    }
}

asort($games);

foreach ($games as $game => $price) {
    $formatPrice = number_format($price, 2, ".", "");
    if (key_exists($game, $gameDLC)) {
        echo "$game - $gameDLC[$game] - $formatPrice" . PHP_EOL;
        unset($games[$game]);
    }
}
arsort($games);
foreach ($games as $game => $price) {
    $formatPrice = number_format($price, 2, ".", "");
    echo "$game - $formatPrice" . PHP_EOL;
}




/*Problem 1. Vapor Winter Sale

Our favorite gaming platform, Vapor, has started its yearly winter sale. Stamat wants to buy some games and he wants to make a list.
Your task is to take every game and add it with its price. The games may have DLCs (downloadable content), which you should also add. The games will be given in the following format "{game}-{price}". The game names will contain only letters, digits and spaces. The DLCs will be given in the following format "{game}:{DLC}". All the of the inputs will be divided by ", ". You should only add the DLC if the game already exists. The DLC increases the game price by 20%.
After you have processed all the games you should lower the prices of all the games by 20% if they don't have a DLC and by 50% if they do. After this you should print the games with DLCs, ordered ascending by price, and then all the games without DLCs, ordered descending by price, in the following format:
•	If the game has a DLC:
o	"{game} - {DLC} - {price}"
•	If the game doesn't have a DLC:
o	"{game} - {price}"
The prices should be formatted to the second decimal place.
Input
One string with inputs, divided by ", ". Each input of the string will be in one of the following formats – "{game}-{price}" or "{game}:{DLC}".
You don't have to check the input, it will always be valid.
Output
"{game1} - {DLC} - {price}"
"{game2} - {DLC} - {price}"
...
"{game n} - {price}"
"{game n + 1} - {price}"
...
Examples
Input	Output
WitHer 3-50, FullLife 3-60, WitHer 3:Blood and Beer, Cyberfunk 2077-120, League of Leg Ends-10, League of Leg Ends:DoaT	League of Leg Ends - DoaT - 6.00
WitHer 3 - Blood and Beer - 30.00
Cyberfunk 2077 - 96.00
FullLife 3 - 48.00
Center Strike-14.99, FortLite-25, BattleShield 5-64.74, BattleShield 5:CoD edition, Dog of War-45, Dead Red Redemption-100, Dead Red Redemption:no DLC	BattleShield 5 - CoD edition - 38.84
Dead Red Redemption - no DLC - 60.00
Dog of War - 36.00
FortLite - 20.00
Center Strike - 11.99
*/
