<?php

$array1 = explode(" ", readline());
$array2 = explode(" ", readline());
$result = [];

foreach ($array2 as $item2) {
    foreach ($array1 as $item1)
        if ($item2 == $item1) {
            $result[] = $item2;
        }
}
echo implode(" ", $result);
