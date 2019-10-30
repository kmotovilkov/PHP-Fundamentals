<?php
$input = readline();
$num = str_split($input);
$sum = 0;

for ($i = 0; $i < count($num); $i++) {
    $sum1 = 1;
    for ($j = 1; $j <= intval($num[$i]); $j++) {
        $sum1 *= $j;
    }
    $sum += $sum1;
}
if ($sum === intval($input)) {
    echo "yes";
} else {
    echo "no";
}
