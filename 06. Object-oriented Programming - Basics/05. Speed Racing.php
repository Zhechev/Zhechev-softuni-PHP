<?php

class Car
{

    private $model;
    private $fuelAmount;
    private $fuelCost1Km;
    private $distanceTraveled = 0;

    public function __construct($model, $fuelAmount, $fuelCost1Km)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCost1Km = $fuelCost1Km;
    }

    public function drive ($amountOfKm){
        $fuelUsed = round($amountOfKm * $this->fuelCost1Km, 2);

        if ($fuelUsed > round($this->fuelAmount)){
            echo "Insufficient fuel for the drive" . PHP_EOL;
        }
        else {
            $this->fuelAmount -= $fuelUsed;
            $this->distanceTraveled += $amountOfKm;
        }
    }

    public function __toString(): string
    {
        return $this->model . " "
            . number_format(abs($this->fuelAmount), 2)
            . " " . $this->distanceTraveled;
    }
}

$input = trim(fgets(STDIN));
$cars = [];

while ($input > 0) {
    $inputCar = explode(' ', trim(fgets(STDIN)));
    $model = $inputCar[0];
    $fuelAmount = $inputCar[1];
    $fuelCost1Km = $inputCar[2];

    $car = new Car($model, $fuelAmount, $fuelCost1Km);
    $cars[$model] = $car;

    $input--;
}


while (true) {
    $commands = explode(' ', trim(fgets(STDIN)));
    if ($commands[0] == 'End') {
        break;
    }

    $modelCar = $commands[1];
    $amountOfKm = floatval($commands[2]);

    $car = $cars[$modelCar];

    $car->drive($amountOfKm);

}

foreach ($cars as $car){
    echo $car . PHP_EOL;
}
