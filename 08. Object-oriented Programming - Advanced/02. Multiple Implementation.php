<?php

interface IPerson
{
    public function setAge(int $age);

    public function getAge(): int;

    public function setName(string $age);

    public function getName(): string;
}

interface Identifiable
{
    public function setId(string $id): string;
}

interface IBirthable
{
    public function setBirthdate(string $birthdate): string;
}

class Citizen implements IPerson, Identifiable, IBirthable
{

    protected $name;
    protected $age;
    protected $id;
    protected $birthdate;


    public function __construct($name, $age, $id, $birthdate)
    {
        $this->setAge($age);
        $this->setName($name);
        $this->setId($id);
        $this->setBirthdate($birthdate);
    }

    public function setId(string $id): string
    {
        return $this->id = $id;
    }

    public function setBirthdate(string $birthdate): string
    {
        return $this->birthdate = $birthdate;
    }


    public function setAge(int $age)
    {
        if ($age < 0) {
            throw new Exception("Age cannot be negative");
        }

        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setName(string $name)
    {
        if (strlen($name) < 3) {
            throw new Exception("Name cannot be less than 3 symbols");
        }
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }


    public function __toString()
    {
        return $this->getName() . PHP_EOL . $this->getAge() . PHP_EOL . $this->getId() . PHP_EOL . $this->getBirthdate();
    }

}

$name = trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));
$id = trim(fgets(STDIN));
$birthdate = trim(fgets(STDIN));

try {
    $citizen = new Citizen($name, $age, $id, $birthdate);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $citizen;