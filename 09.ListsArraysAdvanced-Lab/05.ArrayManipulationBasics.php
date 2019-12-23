<?php
$nums = array_map("intval", explode(" ", readline()));
$line = readline();

while ($line != "end") {
    $token = explode(" ", $line);

    if ($token[0] == "Add") {
        $nums[count($nums)] = intval($token[1]);
    } elseif ($token[0] == "Remove") {
        $index = array_search(intval($token[1]), $nums);
        unset($nums[$index]);
    } elseif ($token[0] == "RemoveAt") {
        array_splice($nums, intval($token[1]), 1);
    } elseif ($token[0] == "Insert") {
        array_splice($nums, intval($token[2]), 0, intval($token[1]));
    }
    $line = readline();
}
echo implode(" ", $nums);
