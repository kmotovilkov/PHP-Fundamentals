<?php

$tickets = explode(", ", readline());
$pattern = '/^[^$#@^]*([$#@^]{6,10})[^$#@^]*$/';
$matchesLeft = [];
$matchesRight = [];

foreach ($tickets as $ticket) {
    $ticket = trim($ticket);
    if (strlen($ticket) == 20) {
        $left = substr($ticket, 0, 10);
        $right = substr($ticket, 10);
        if (preg_match($pattern, $left, $matchesLeft) && preg_match($pattern, $right, $matchesRight)) {

            if ($left == $right && strlen($left)) {
                $char = $left[0];


                echo "ticket \"$ticket\" - 10$char Jackpot!" . PHP_EOL;
            }
        } else {
            $lengthLeft = strlen($matchesLeft[1]);
            $lengthRight = strlen($matchesRight[1]);

            if ($lengthLeft > $lengthRight) {
                $char = $matchesLeft[1][0];
                echo "ticket \"$ticket\" - $lengthLeft$char" . PHP_EOL;
            } else {
                $char = $matchesRight[1][0];
                echo "ticket \"$ticket\" - $lengthRight$char" . PHP_EOL;
            }
        }

    } else {
        echo "ticket\"$ticket\" - no match" . PHP_EOL;
    }

}
