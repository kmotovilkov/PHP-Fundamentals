<?php

$input = readline();
$courses = [];


while ($input != "end") {

    $args = explode(" : ", $input);
    $coursesName = $args[0];
    $studentsName = $args[1];

    if (!key_exists($coursesName, $courses)) {
        $courses[$coursesName][] = $studentsName;
    } else {
        $courses[$coursesName][] = $studentsName;
    }

    $input = readline();
}
uksort($courses, function ($tech1, $tech2) use ($courses) {
    $count1 = count($courses[$tech1]);
    $count2 = count($courses[$tech2]);

    return $count2 <=> $count1;
});
foreach ($courses as $tech => $studentArr) {
    asort($studentArr);
    $count=count($studentArr);
    echo "$tech: $count".PHP_EOL;
    foreach ($studentArr as $student){
        echo "-- $student".PHP_EOL;
    }
}
