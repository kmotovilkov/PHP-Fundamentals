<?php

$length = intval(readline());
$line = readline();

$bestDNA = "";
$bestIndex = PHP_INT_MAX;
$bestSum = PHP_INT_MIN;
$bestCount = PHP_INT_MIN;
$row = -1;
$x = 0;

while ($line != "Clone them!") {
    $x++;
    $dna = str_replace("!", "", $line);
    if (strlen($dna) != $length) {
        $line = readline();
        continue;
    }
    $maxCount = 0;
    $index = -1;
    $currentCount = 0;
    $lastElement = 0;
    $currentSum = 0;
    for ($i = 0; $i < $length; $i++) {
        $num = intval($dna[$i]);
        $currentSum += $num;
        if ($num == 1) {
            if ($lastElement == 1) {
                $currentCount++;
            } else {
                $lastElement = 1;
                $currentCount = 1;
            }
        } else {
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
                $index = $i - $maxCount + 1;
            }
            $lastElement = 0;
            $currentCount = 0;
        }
    }
    if ($maxCount > $bestCount) {
        $bestDNA = $dna;
        $bestCount = $maxCount;
        $bestSum = $currentSum;
        $bestIndex = $index;
        $row = $x;
    } else if ($maxCount == $bestCount) {
        if ($index < $bestIndex) {
            $bestDNA = $dna;
            $bestCount = $maxCount;
            $bestSum = $currentSum;
            $bestIndex = $index;
            $row = $x;
        } else if ($index == $bestIndex) {
            if ($currentSum > $bestSum) {
                $bestDNA = $dna;
                $bestCount = $maxCount;
                $bestSum = $currentSum;
                $bestIndex = $index;
                $row = $x;
            }
        }
    }

    $line = readline();
}

echo "Best DNA sample $row with sum: $bestSum" . PHP_EOL;
for ($i = 0; $i < strlen($bestDNA); $i++) {
    echo $bestDNA[$i] . " ";
}
