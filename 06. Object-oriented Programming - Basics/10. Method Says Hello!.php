<?php

class Person
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        echo $name . " says \"Hello\"!";
    }
}

$input = trim(fgets(STDIN));
$person = new Person($input);

?>