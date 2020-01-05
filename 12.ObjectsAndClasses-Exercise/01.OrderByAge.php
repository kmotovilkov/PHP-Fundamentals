<?php

class Person
{
    private $name;
    private $id;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $id
     * @param $age
     */
    public function __construct($name, $id, $age)
    {
        $this->setName($name);
        $this->setId($id);
        $this->setAge($age);
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
    private function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    private function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    private function setAge($age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return "$this->name with ID: $this->id is $this->age years old.";
    }

}


$input = readline();
$people = [];
while (1) {
    if ($input == "End") {
        break;
    }
    $tokens = explode(" ", $input);
    $name = $tokens[0];
    $id = $tokens[1];
    $age = (int)$tokens[2];

    $person = new Person($name, $id, $age);
    $people[] = $person;

    $input = readline();
}
usort($people, function (Person $person1, Person $person2) use ($people) {

    $age1 = $person1->getAge();
    $age2 = $person2->getAge();

    return $age1 <=> $age2;
});

foreach ($people as $person) {
    echo $person . PHP_EOL;
}
