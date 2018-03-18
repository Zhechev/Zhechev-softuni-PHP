<?php

class Siamese
{
    private $name;
    private $earSize;
    private $type = 'Siamese';

    public function __construct($name, $earSize)
    {
        $this->name = $name;
        $this->earSize = $earSize;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEarSize()
    {
        return $this->earSize;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


    public function __toString()
    {
        return $this->getName() . " " . $this->getEarSize() . PHP_EOL;
    }
}

class Cymric
{
    private $name;
    private $furLength;
    private $type = 'Cymric';

    public function __construct($name, $furLength)
    {
        $this->name = $name;
        $this->furLength = $furLength;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFurLength()
    {
        return $this->furLength;
    }

    public function getType(): string
    {
        return $this->type;
    }


    public function __toString()
    {
        return $this->getName() . " " . $this->getFurLength() . PHP_EOL;
    }


}

class StreetExtraordinaire
{
    private $name;
    private $decibelsOfMeows;
    private $type = 'StreetExtraordinaire';

    public function __construct($name, $decibelsOfMeows)
    {
        $this->name = $name;
        $this->decibelsOfMeows = $decibelsOfMeows;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDecibelsOfMeows()
    {
        return $this->decibelsOfMeows;
    }


    public function getType(): string
    {
        return $this->type;
    }


    public function __toString()
    {
        return $this->getName() . " " . $this->getDecibelsOfMeows() . PHP_EOL;
    }
}

$cats = [];
$cat = '';
while (true) {
    $line = explode(' ', trim(fgets(STDIN)));
    if ($line[0] == 'End') {
        break;
    } else {
        $type = $line[0];
        $name = $line[1];
        $characteristic = $line[2];


        if ($type == "StreetExtraordinaire") {
            $cat = new StreetExtraordinaire($name, $characteristic);
            $cats[$name] = $cat;
        } else if ($type == "Siamese") {
            $cat = new Siamese($name, $characteristic);
            $cats[$name] = $cat;
        } else {
            $cat = new Cymric($name, $characteristic);
            $cats[$name] = $cat;
        }
    }

    var_dump($cats);
}

$nameOfPrintCat = trim(fgets(STDIN));

foreach ($cats as $cat) {
    if ($nameOfPrintCat == $cat->getName()) {
        echo $cat->getType() . " " . $cat;
    }
}





