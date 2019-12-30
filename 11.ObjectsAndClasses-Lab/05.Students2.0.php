<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $hometown;

    /**
     * Student constructor.
     * @param $firstName
     * @param $lastName
     * @param $age
     * @param $hometown
     */
    public function __construct($firstName, $lastName, $age, $hometown)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->hometown = $hometown;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * @param mixed $hometown
     */
    public function setHometown($hometown): void
    {
        $this->hometown = $hometown;
    }

    public function __toString()
    {
        return $this->getFirstName() . " " . $this->getLastName() . " is " . $this->getAge() . " years old." . PHP_EOL;
    }
}

$data = readline();
$studentsArr = [];


while ($data !== "end") {
    $studentInfo = explode(" ", $data);

    $firstName = $studentInfo[0];
    $lastName = $studentInfo[1];
    $age = $studentInfo[2];
    $hometown = $studentInfo[3];

    $students = new Student($firstName, $lastName, $age, $hometown);

    $studentsArr[] = $students;


    if (isStudentExisting($studentsArr, $firstName, $lastName)) {

        foreach ($studentsArr as $student) {


            if ($student->getFirstName() === $firstName && $student->getLastName() === $lastName) {

                $student->setAge($age);
                $student->setHometown($hometown);
                break;
            }

        }

    } else {
        $students = new Student($firstName, $lastName, $age, $hometown);
        $studentsArr[] = $students;
    }

    $data = readline();
}


$town = readline();

$studentsArr = array_unique($studentsArr);
foreach ($studentsArr as $student) {

    if ($town === $student->getHometown()) {
        echo $student;
    }

}


function isStudentExisting($studentsArr, $firstName, $lastName)
{

    foreach ($studentsArr as $student) {
        if ($student->getFirstName() === $firstName && $student->getLastName() == $lastName) {
            return true;
        }

    }
    return false;
}
