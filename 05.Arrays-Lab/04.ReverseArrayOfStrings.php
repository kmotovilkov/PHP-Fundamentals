<?php

$arr = explode(" ", readline());

for ($i = 0; $i < count($arr); $i++) {
    $a = array_reverse($arr);
}
$output = implode(" ", $a);
echo $output;
