<?php

$text = readline();
$encrypted = "";
for ($i = 0; $i < strlen($text); $i++) {
    $symbol = ord($text[$i])+3;
    $encrypted = chr($symbol);
    echo $encrypted;

}
