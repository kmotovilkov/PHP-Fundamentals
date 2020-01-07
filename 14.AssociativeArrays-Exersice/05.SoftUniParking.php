<?php

$n = intval(readline());
$license = [];

for ($i = 0; $i < $n; $i++) {
    $tokens = explode(" ", readline());
    $command = $tokens[0];
    $username = $tokens[1];

    if ($command == "register") {
        $licenseNumber = $tokens[2];
        if (!key_exists($username, $license)) {
            $license[$username] = $licenseNumber;
            echo "$username registered $licenseNumber successfully" . PHP_EOL;
        } else {
            echo "ERROR: already registered with plate number $licenseNumber" . PHP_EOL;
        }
    } else if ($command == "unregister") {
        if (!key_exists($username, $license)) {

            echo "ERROR: user $username not found" . PHP_EOL;
        } else {
            unset($license[$username]);
            echo "$username unregistered successfully" . PHP_EOL;
        }
    }
}
foreach ($license as $key => $tokens) {
    echo "$key => $tokens" . PHP_EOL;
}
