<?php

class DecimalNumbers
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function reverse()
    {
        return strrev($this->number);
    }
}

$input = trim(fgets(STDIN));
$number = new DecimalNumbers($input);
echo $number->reverse();

?>