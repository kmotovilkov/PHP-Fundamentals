<?php

$input = readline();
palindrome($input);
function palindrome(string $input)
{
    while (true) {
        if ($input == "END") {
            break;
        }
        $length = strlen($input);

        for ($i = 0; $i < $length; $i++) {
            if ($input[$i] != $input[$length - 1 - $i]) {
                echo "false" . PHP_EOL;
                break;
            }
            echo "true" . PHP_EOL;
            break;
        }
        $input = readline();
    }
}
