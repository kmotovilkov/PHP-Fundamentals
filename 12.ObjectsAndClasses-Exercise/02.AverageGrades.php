<?php

class Student
{
    private $name;
    private $gradesList;
    private $avg;

    public function __construct($name, $gradesList, $avg)
    {
        $this->name = $name;
        $this->gradesList = $gradesList;
        $this->avg = $avg;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAvg()
    {
        return $this->avg;
    }

    public function __toString()
    {
        $formatted = number_format($this->getAvg(), 2);
        if ($this->getAvg() >= 5) {


            return "$this->name -> $formatted" . PHP_EOL;
        }
        return "";
    }
}

$n = intval(readline());
$students = [];

for ($i = 0; $i < $n; $i++) {
    $tokens = explode(" ", readline());
    $name = $tokens[0];
    $grades = [];
    $sum = 0;

    for ($j = 1; $j < count($tokens); $j++) {
        $grades[] = $tokens[$j];
        $sum += $tokens[$j];
    }

    $avg = $sum / count($grades);
    $student = new Student($name, $grades, $avg);
    $students[] = $student;

}
usort($students, function (Student $e1, Student $e2) use ($students) {
    $name1 = $e1->getName();
    $name2 = $e2->getName();
    $avg1 = $e1->getAvg();
    $avg2 = $e2->getAvg();
    if ($name1 == $name2) {
        return $avg2 <=> $avg1;
    }
    return $name1 <=> $name2;


});
foreach ($students as $student) {
    echo $student;
}
