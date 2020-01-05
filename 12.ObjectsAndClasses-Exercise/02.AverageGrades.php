<?php

class Student
{
    private $name;
    private $listOfGrade;
    private $average;

    /**
     * Student constructor.
     * @param $name
     * @param $listOfGrade
     * @param $average
     */
    public function __construct($name, $listOfGrade, $average)
    {
        $this->setName($name);
        $this->setListOfGrade($listOfGrade);
        $this->setAverage($average);
    }

    /**
     * @return mixed
     */


    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getListOfGrade()
    {
        return $this->listOfGrade;
    }

    /**
     * @param mixed $listOfGrade
     */
    public function setListOfGrade($listOfGrade): void
    {
        $this->listOfGrade = $listOfGrade;
    }

    /**
     * @return mixed
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * @param mixed $average
     */
    public function setAverage($average): void
    {
        $this->average = $average;
    }

    public function __toString()
    {
        if ($this->getAverage() >= 5) {
            $formatted = number_format($this->getAverage(), 2);
            return $this->getName() . " -> " . $formatted . PHP_EOL;
        }
        return "";
    }
}

$studentCount = intval(readline());
$students = [];
for ($i = 0; $i < $studentCount; $i++) {
    $input = readline();
    $tokens = explode(" ", $input);
    $name = $tokens[0];
    $grades = [];
    $sum = 0;
    for ($j = 1; $j < count($tokens); $j++) {
        $grades[] = $tokens[$j];
        $sum += $tokens[$j];
    }
    $average = $sum / count($grades);
    $student = new Student($name, $grades, $average);
    $students[] = $student;
}

usort($students, function (Student $student1, Student $student2)
use ($students) {

    $name1 = $student1->getName();
    $name2 = $student2->getName();
    $average1 = $student1->getAverage();
    $average2 = $student2->getAverage();

    if ($name1 == $name2) {
        return $average2 <=> $average1;

    }
    return $name1 <=> $name2;
});

foreach ($students as $student) {
    echo $student;
}
