<?php

interface IPerson
{
    public function setAge(int $age);

    public function getAge(): int;

    public function setName(string $age);

    public function getName(): string;
}

class Citizen implements IPerson
{

    protected $name;
    protected $age;


    public function __construct($name, $age)
    {
        $this->setAge($age);
        $this->setName($name);
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

    public function __toString()
    {
        return $this->getName() . PHP_EOL . $this->getAge();
    }

}

$name = trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));
try {
    $citizen = new Citizen($name, $age);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $citizen;