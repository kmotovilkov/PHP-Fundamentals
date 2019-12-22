<?php

$pass = readline();
$isValidLength = lengthValid($pass);
$isOnlyLettersAndDigits = onlyLettersAndDigits($pass);
$isHaveAtLeastDigits = haveAtLeastDigits($pass);

if ($isHaveAtLeastDigits && $isOnlyLettersAndDigits && $isHaveAtLeastDigits) {
    echo "Password is valid" . PHP_EOL;
}
if (!$isValidLength) {
    echo "Password must be between 6 and 10 characters" . PHP_EOL;
}
if (!$isOnlyLettersAndDigits) {
    echo "Password must consist only of letters and digits" . PHP_EOL;
}
if (!$isHaveAtLeastDigits) {
    echo "Password must have at least 2 digits" . PHP_EOL;
}

function lengthValid(string $password)
{
    $length = strlen($password);
    if ($length >= 6 && $length <= 10) {
        return true;

    }
    return false;
}

function onlyLettersAndDigits(string $password)
{
    if (ctype_alnum($password)) {
        return true;
    }
    return false;
}

function haveAtLeastDigits(string $password)
{
    $length = strlen($password);
    $count = 0;
    for ($i = 0; $i < $length; $i++) {
        if (ctype_digit($password[$i])) {
            $count++;
        }
    }
    if ($count >= 2) {
        return true;
    }
    return false;
}
