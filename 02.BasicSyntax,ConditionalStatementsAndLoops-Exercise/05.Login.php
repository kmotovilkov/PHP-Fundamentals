<?php

$username = readline();
$pass = strrev($username);
$counter = 0;

while (true) {
    $input = readline();
    if ($input === $pass) {
        echo "User $username logged in.";
        break;
    } else if ($counter >= 3) {
        echo "User $username blocked!";
        break;
    } else {
        echo "Incorrect password. Try again." . PHP_EOL;
        $counter++;
    }
}
