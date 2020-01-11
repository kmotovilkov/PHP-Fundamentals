<?php

$text = explode(", ", readline());

foreach ($text as $word) {
    $count = strlen($word);

    if ($count >= 3 && $count <= 16) {
        $validName = true;
        for ($i = 0; $i < $count; $i++) {
            if (!(ctype_alnum($word[$i]) || $word[$i] === "_" || $word[$i] === "-")) {
                $validName = false;
                break;
            }
        }
        if ($validName) {
            echo $word . PHP_EOL;
        }
    }
}
