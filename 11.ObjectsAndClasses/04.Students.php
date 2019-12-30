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
     */
    public function __construct($firstName, $lastName, $age, $hometown)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
        $this->setHometown($hometown);
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    private function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    private function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getAge()
    {
        return $this->age;
    }


    private function setAge($age): void
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
    private function setHometown($hometown): void
    {
        $this->hometown = $hometown;
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

    $data = readline();
}

$town = readline();

foreach ($studentsArr as $student) {
    if ($town === $student->getHometown()) {
        echo $student->getFirstName() . " " . $student->getLastName() . " is " . $student->getAge() . " years old." . PHP_EOL;
    }

}
