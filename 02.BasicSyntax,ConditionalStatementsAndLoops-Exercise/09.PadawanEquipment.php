<?php

$amountM = floatval(readline());
$studentsNum = intval(readline());
$sabersPrice = floatval(readline());
$robesPrice = floatval(readline());
$beltsPrice = floatval(readline());

$sumRobes = $studentsNum * $robesPrice;
$sumBelts = $beltsPrice * ceil($studentsNum - ($studentsNum / 6));

$sumSabers = $sabersPrice * ceil(($studentsNum + (0.10 * $studentsNum)));

$totalSum = $sumRobes + $sumBelts + $sumSabers;

if ($totalSum <= $amountM) {
    printf("The money is enough - it would cost %.2flv.", $totalSum);

} else {
    $diff = $totalSum - $amountM;
    printf("Ivan Cho will need %.2flv more.", $diff);
}
