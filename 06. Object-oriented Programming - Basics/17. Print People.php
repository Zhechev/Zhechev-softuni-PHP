<?php

class Person {

    private $name;
    private $age;
    private $occupation;


    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function __toString()
    {
        return $this->name . ' - age: ' . $this->age . ', occupation: ' . $this->occupation . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }




}

$persons = [];
$occupations = [];

while (true){
    $line = explode(' ', trim(fgets(STDIN)));
    if ($line[0] == 'END'){
        break;
    }

    $name = $line[0];
    $age = intval($line[1]);
    $occupation = $line[2];


    $person = new Person($name, $age, $occupation);
    $persons[] = $person;
}

usort($persons, function ($a, $b){
    return $a->getAge() > $b->getAge();
});

foreach ($persons as $person) {
    echo $person->getName() . ' - age: ' . $person->getAge() . ', occupation: ' . $person->getOccupation() . PHP_EOL;
}

