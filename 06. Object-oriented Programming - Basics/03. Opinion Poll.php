<?php


class Person
{
    private $name;
    private $age;
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name ." - ". $this->age;
    }

}

$numberOfInputs = trim(fgets(STDIN));


$outt = [];
while ($numberOfInputs >= 0){
    $input = trim(fgets(STDIN));
    $input = explode(' ', $input);

    $name = $input[0];
    $age = intval($input[1]);
    $check = checkAge($age);


    if ($check) {
        $outt [] = new Person($name, $age);
    }


    $numberOfInputs--;
}

function checkAge ($age){
    return $age > 30;
}

usort($outt, function ($a, $b)
{
    return strcmp($a->getName(), $b->getName());
});


foreach ($outt as $person){
    echo "{$person} \n";
}

?>