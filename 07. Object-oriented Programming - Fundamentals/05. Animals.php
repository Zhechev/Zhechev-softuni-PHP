<?php

class Animal
{
    protected $name;
    protected $age;
    protected $gender;

    /**
     * Animals constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->setAge($age);
        $this->gender = $gender;
    }

    //Getters

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function getGender()
    {
        return $this->gender;
    }


    public function setAge($age)
    {
        if ($age < 0) {
            throw new Exception("Invalid input!");
        } else {
            $this->age = $age;
        }
    }

    public function __toString()
    {
        return $this->getName() . " " . $this->getAge() . " " . $this->getGender();
    }


}

class Dog extends Animal
{

    public function produceSound()
    {
        return "BauBau";
    }


}

class Frog extends Animal
{
    public function produceSound()
    {
        return "Frogggg";
    }

}

class Cat extends Animal
{

    public function produceSound()
    {
        return "MiauMiau";
    }

}

class Kitten extends Cat
{

    public function produceSound()
    {
        return "Miau";
    }

}

class Tomcat extends Cat
{

    public function produceSound()
    {
        return "Give me one million b***h";
    }

}

try {
    while (true) {
        $animalLine = trim(fgets(STDIN));
        if ($animalLine == "Beast!") {
            break;
        }

        if (!class_exists($animalLine)) {
            throw new Exception("Invalid input!");
        }

        $line = explode(' ', trim(fgets(STDIN)));
        $name = $line[0];
        $age = $line[1];
        $gender = $line[2];

        if ($animalLine == "Kittens" && $gender = "Male") {
            throw new Exception("Invalid input!");
        } else if ($animalLine == "Tomcats" && $gender = "Female") {
            throw new Exception("Invalid input!");
        }

        switch ($animalLine) {
            case "Dog":
                $animal = new Dog($name, $age, $gender);
                break;
            case "Cat":
                $animal = new Cat($name, $age, $gender);
                break;
            case "Frog":
                $animal = new Frog($name, $age, $gender);
                break;
            case "Kittens":
                $animal = new Kitten($name, $age, $gender);
                break;
            case "Tomcat":
                $animal = new Animal($name, $age, $gender);
                break;
            default:
                throw new Exception("Invalid Input");
        }

        echo $animalLine . " " . $animal . PHP_EOL . $animal->produceSound() . PHP_EOL;


    }
} catch (Exception $ex) {

    echo $ex->getMessage();
}
