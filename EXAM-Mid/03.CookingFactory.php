<?php
$input = readline();
$breadBatch = [];
$bestBreadQuality = PHP_INT_MIN;
$bestCount = 0;
$bestAverageQuality = 0;

while (true) {
    if ($input == "Bake It!") {
        break;
    }
    $bread = explode("#", $input);
    $count = count($bread);
    $breadSumQuality = array_sum($bread);
    $averageQuality = $breadSumQuality / $count;

    if ($breadSumQuality > $bestBreadQuality) {
        $bestBreadQuality = $breadSumQuality;
        $breadBatch = $bread;
        $bestCount = count($breadBatch);
        $bestAverageQuality = $bestBreadQuality / $bestCount;
    } else if ($breadSumQuality == $bestBreadQuality) {
        if ($averageQuality > $bestAverageQuality) {
            $breadBatch = $bread;
            $bestCount = count($breadBatch);
            $bestAverageQuality = $bestBreadQuality / $bestCount;
        } else if ($averageQuality == $bestAverageQuality) {
            if ($count < $bestCount) {
                $breadBatch = $bread;
                $bestCount = count($breadBatch);
                $bestAverageQuality = $bestBreadQuality / $bestCount;
            }
        }
    }

    $input = readline();
}

echo "Best Batch quality: $bestBreadQuality" . PHP_EOL;
echo implode(" ", $breadBatch);
