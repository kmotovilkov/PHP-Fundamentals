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


/*Problem 3. Cooking Factory
The George`s Cooking factory got another order. But this time you are tasked to bake 
the best Bread for a special party.
Until you receive a command "Bake it!" you will be receiving strings, the batches of bread. Each string is an array of numbers, split by "#". Each element is a bread and the number represent its quality.
You should select the batch with the highest total quality of bread.
If there are several batches with same total quality select the batch with the greater average quality.
If there are several batches with same total quality and average quality, take the one with the fewest elements (length).
Input / Constraints
•	Until you receive a command "Bake it!" you will be receiving strings, the batches of bread. Each string is an array of numbers, split by "#". Each element is a bread and the number represent its quality.
•	Each batch will have from 1 to 10 elements.
•	Bread quality is an integer in the range [-100, 100].
Output
•	After you receive the last command "Bake It!" you should print the following message:
"Best Batch quality: {bestTotalQuality}"
"{bread batch, joined by space}"
 Examples
Input	Output	Comments
5#4#10#-2
10#5#2#3#2
Bake It!	Best Batch quality: 22
10 5 2 3 2	We receive 2 batches, but the second is printed, because its total quality is better.
Input	Output	Comments
5#3#2
10#2#-2#1#-1
4#2#1
Bake It!	Best Batch quality: 10
5 3 2	We receive 3 sequences. Both 1 and 2 have same total quality -> 10, but the first is printed, because its has better average quality 3.(333).
*/
