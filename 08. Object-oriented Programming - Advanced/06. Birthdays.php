<?php

interface Iborder
{
    public function checkBirthday();
}

class Citizen implements Iborder
{

    private $name;
    private $age;
    private $id;
    private $birthdate;

    public function __construct($name, $age, $id, $birthdate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->birthdate = $birthdate;
    }


    public function checkBirthday()
    {
        $year = explode('/', $this->getBirthdate());
        return $year[2];
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }




}

class Robot
{
    private $model;
    private $id;

    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->id = $id;
    }

}

class Pet implements Iborder
{
    private $name;
    private $birthdate;

    /**
     * Pet constructor.
     * @param $name
     * @param $birthdate
     */
    public function __construct($name, $birthdate)
    {
        $this->name = $name;
        $this->birthdate = $birthdate;
    }


    public function checkBirthday()
    {
        $year = explode('/', $this->getBirthdate());
        return $year[2];
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }


}

$persons = [];

while (true){
    $input = explode(' ', trim(fgets(STDIN)));
    if($input[0] == 'End'){
        break;
    }

    if ($input[0] == 'Citizen'){
        $name = $input[1];
        $age = $input[2];
        $id = $input[3];
        $birthdate = $input[4];
        $citizen = new Citizen($name, $age, $id, $birthdate);
        $persons[] = $citizen;
    }

    else if ($input[0] == 'Pet'){
        $name = $input[1];
        $birthdate = $input[2];
        $pet = new Pet($name, $birthdate);
        $persons[] = $pet;
    }
}

$checkBirthdate = trim(fgets(STDIN));
$output = [];


foreach ($persons as $person) {
    if($person->checkBirthday() == $checkBirthdate){
        $output[] = $person->getBirthdate();
    }
}

if (empty($output)){
    echo "<no output>";
} else {
    foreach ($output as $item) {
        echo $item . PHP_EOL;
    }
}

