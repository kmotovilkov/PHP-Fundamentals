<?php

$replace = readline();
$word = readline();

while (strstr($word, $replace) !== false) {
    $word = str_replace($replace, "", $word);

}
    echo $word;
