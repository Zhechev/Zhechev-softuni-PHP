<?php


class Person {

    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name . " " . $this->age;
    }



}

class Family {

    private $persons = [];
    private $oldestMember = null;

    public function getPersons(): array
    {
        return $this->persons;
    }



    public function addMember(Person $person){
        $this->persons[] = $person;
        if ($this->oldestMember == null || $person->getAge() > $this->oldestMember->getAge()){
            $this->oldestMember = $person;
        }
    }

    public function getOldestMember(): Person
    {
        return $this->oldestMember;
    }


}

$input = trim(fgets(STDIN));
$family = new Family();
while ($input > 0){
    $line = explode(' ', trim(fgets(STDIN)));
    $name = $line[0];
    $age = intval($line[1]);
    $person = new Person($name, $age);
    $family->addMember($person);
    $input--;
}

echo $family->getOldestMember();

