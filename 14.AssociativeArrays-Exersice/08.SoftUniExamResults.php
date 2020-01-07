<?php

$input = readline();
$students = [];
$submissions = [];

while (true) {

    if ($input == "exam finished") {
        break;
    }

    $args = explode("-", $input);
    $username = $args[0];
    $language = $args[1];

    if (count($args) % 2 == 0) {
        if (key_exists($username,$students)){
            unset($students[$username]);
        }

    } else {
        $points = $args[2];
        if (!key_exists($language, $submissions)) {
            $submissions[$language] = 1;
        } else {
            $submissions[$language]++;
        }
        if (!key_exists($username, $students)) {
            $students[$username] = $points;
        } else {
            if ($students[$username] < $points) {
                $students[$username] = $points;
            }
        }
    }

    $input = readline();
}
uksort($students, function ($name1, $name2) use ($students) {
    $points1 = $students[$name1];
    $points2 = $students[$name2];
    if ($points1 == $points2) {
        return $name1 <=> $name2;
    }
    return $points2 <=> $points1;
});
uksort($submissions, function ($tech1, $tech2) use ($submissions) {
    $count1 = $submissions[$tech1];
    $count2 = $submissions[$tech2];
    if ($count1 == $count2) {
        return $tech1 <=> $tech2;
    }
    return $count2 <=> $count1;
});


echo "Results:" . PHP_EOL;

foreach ($students as $name => $point) {
    echo "$name | $point" . PHP_EOL;
}
echo "Submissions:" . PHP_EOL;
foreach ($submissions as $tech => $count) {
    echo "$tech - $count" . PHP_EOL;
}
