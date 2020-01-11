<?php

$words = explode(" ", readline());

foreach ($words as $word) {

    $count = strlen($word);
    while ($count !== 0) {
        echo "$word";
        $count--;
    }
}
