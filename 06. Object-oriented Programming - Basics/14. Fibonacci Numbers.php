<?php

class Fibonacci {
    private $numbers = [0,1];
    private $startPos;
    private $endPos;

    public function __construct($startPos, $endPos)
    {
        $this->startPos = $startPos;
        $this->endPos = $endPos;
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }

    public function getEndPos()
    {
        return $this->endPos;
    }




    public function getNumbersInRange($startPos, $endPos){
        for ($i=2; $i<$endPos; $i++){
            $this->numbers[] = $this->numbers[$i - 2] + $this->numbers[$i-1];
        }

        $numberInRange = array_slice($this->numbers, $startPos, $endPos);

        return implode(', ', $numberInRange);
    }


}

$startPos = intval(trim(fgets(STDIN)));
$endPos = intval(trim(fgets(STDIN)));

$fibonacci = new Fibonacci($startPos, $endPos);
echo $fibonacci->getNumbersInRange($startPos, $endPos);



