<?php

class Person
{

    private $firstName;
    private $lastName;
    private $age;


    public function __construct($firstName, $lastName, $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
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


}

$firstName = readline();
$lastName = readline();
$age = readline();

$person = new Person($firstName, $lastName, $age);

echo "firstName: " . $person->getFirstName() . PHP_EOL . "lastName: " .
    $person->getLastName() . PHP_EOL . "age: " . $person->getAge();
