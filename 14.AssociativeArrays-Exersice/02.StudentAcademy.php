<?php

$n = intval(readline());

$studentArr = [];
$gradeArr = [];

for ($i = 0; $i < $n; $i++) {
    $student = readline();
    $studentGrade = floatval(readline());

    if (!key_exists($student, $studentArr)) {
        $studentArr[$student] = $studentGrade;
        $gradeArr[$student] = 1;
    } else {
        $studentArr[$student] += $studentGrade;
        $gradeArr[$student]++;
    }

}
foreach ($studentArr as $name => $sumGrade) {
    $sum = $studentArr[$name];
    $gradeCount = $gradeArr[$name];
    $avg = $sum / $gradeCount;
    $studentArr[$name] = $avg;
}
arsort($studentArr);

foreach ($studentArr as $name => $grade) {
    if ($grade >= 4.5) {
        printf("$name -> %.2f" . PHP_EOL, $grade);
    }
}
