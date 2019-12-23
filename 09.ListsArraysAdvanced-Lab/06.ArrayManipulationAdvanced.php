<?php
$nums = array_map("intval", explode(" ", readline()));
$line = readline();

while ($line != "end") {
    $token = explode(" ", $line);

    if ($token[0] == "Add") {
        $nums[count($nums)] = intval($token[1]);
    } else if ($token[0] == "Remove") {
        $index = array_search(intval($token[1]), $nums);
        unset($nums[$index]);
    } else if ($token[0] == "RemoveAt") {
        array_splice($nums, intval($token[1]), 1);
    } else if ($token[0] == "Insert") {
        array_splice($nums, intval($token[2]), 0, intval($token[1]));
    } else if ($token[0] == "Contains") {
        if (in_array(intval($token[1]), $nums)) {
            echo "Yes";
        } else {
            echo "No such number";
        }
        echo PHP_EOL;
    } else if ($token[0] == "Print" && $token[1] == "even") {
        foreach ($nums as $num) {
            if ($num % 2 == 0) {
                echo "$num ";
            }
        }
        echo PHP_EOL;
    } else if ($token[0] == "Print" && $token[1] == "odd") {
        foreach ($nums as $num) {
            if ($num % 2 == 1) {
                echo "$num ";
            }
        }
        echo PHP_EOL;
    } else if ($token[0] == "Get" && $token[1] == "sum") {
        echo array_sum($nums) . PHP_EOL;

    } else if ($token[0] == "Filter") {

        if ($token[1] == "<") {
            $a = intval($token[2]);
            foreach ($nums as $num) {
                if ($num < $a) {
                    echo "$num ";
                }
            }
            echo PHP_EOL;
        }
        if ($token[1] == ">") {
            $a = intval($token[2]);
            foreach ($nums as $num) {
                if ($num > $a) {
                    echo "$num ";
                }
            }
            echo PHP_EOL;
        }
        if ($token[1] == "<=") {
            $a = intval($token[2]);
            foreach ($nums as $num) {
                if ($num <= $a) {
                    echo "$num ";
                }
            }
            echo PHP_EOL;
        }
        if ($token[1] == ">=") {
            $a = intval($token[2]);
            foreach ($nums as $num) {
                if ($num >= $a) {
                    echo "$num ";
                }
            }
        }
        echo PHP_EOL;
    }


    $line = readline();
}

echo implode(" ", $nums);
