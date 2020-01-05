<?php

class AgeOrder
{

    private $name;
    private $id;
    private $age;

    public function __construct(string $name, string $id, int $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }


    public function __toString()
    {
        return "$this->name with ID: $this->id is $this->age years old." . PHP_EOL;
    }
}

$input = readline();
$personArr = [];
while (true) {
    if ($input == "End") {
        break;
    }
    list($name, $id, $age) = explode(" ", $input);
    $ageOrder = new AgeOrder($name, $id, $age);
    $age = intval($age);
    $personArr[] = $ageOrder;
    $input = readline();
}

usort($personArr, function (AgeOrder $e1, AgeOrder $e2) use ($personArr) {
    $age1 = $e1->getAge();
    $age2 = $e2->getAge();
    return $age1 <=> $age2;
});

foreach ($personArr as $person) {
    echo $person;
}
