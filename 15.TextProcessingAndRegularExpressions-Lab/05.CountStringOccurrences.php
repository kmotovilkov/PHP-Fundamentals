<?php

$text = preg_split("/[ ,.?!]/", readline(), null, PREG_SPLIT_NO_EMPTY);
$search = readline();
$count = 0;

foreach ($text as $word) {
    if ($word === $search) {
        $count++;
    }
}
echo $count;
