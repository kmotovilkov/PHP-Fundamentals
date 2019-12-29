<?php

$nums = explode(" ", readline());

while (true) {
    $input = readline();
    if ($input == "End") {
        break;
    }
    $tokens = explode(" ", $input);

    if ($tokens[0] == "Add") {
        $number = $tokens[1];
        $nums[] = $number;
    } else if ($tokens[0] == "Remove") {
        $index = $tokens[1];
        if (isValid($nums, $index)) {
            array_splice($nums, $index, 1);
        } else {
            echo "Invalid index" . PHP_EOL;
        }

    } else if ($tokens[0] == "Insert") {
        $number = $tokens[1];
        $index = $tokens[2];
        if (isValid($nums, $index)) {
            array_splice($nums, $index, 0, $number);
        } else {
            echo "Invalid index" . PHP_EOL;
        }

    } else if ($tokens[0] == "Shift") {
        $position = $tokens[1];
        $number = $tokens[2];
        $nums = shift($nums, $position, $number);
    }
}

echo implode(" ", $nums);

function isValid(array $nums, $index)
{
    if ($index >= 0 && $index <= count($nums)) {
        return true;
    }
    return false;
}


function shift(array $nums, string $position, int $number)
{
    if ($position == "left") {
        for ($i = 0; $i < $number; $i++) {
            $temp = array_shift($nums);
            $nums[] = $temp;
        }

    } else if (($position == "right")) {
        for ($i = 0; $i < $number; $i++) {
            $temp = array_pop($nums);
            array_unshift($nums, $temp);
        }

    }
    return $nums;
}
