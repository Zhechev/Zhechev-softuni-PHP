<?php

class Person
{
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }




}


$person = new Person('ivan', 12);
echo(count(get_object_vars($person)));


?>