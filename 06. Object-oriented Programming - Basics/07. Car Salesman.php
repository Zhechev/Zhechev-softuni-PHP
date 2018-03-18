<?php

class Car {
    private $model;
    private $engine;
    private $weight;
    private $color;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $weight
     * @param $color
     */
    public function __construct($model, $engine, $weight, $color)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;

    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }



    public function __toString()
    {
        return $this->model . ':' . PHP_EOL . $this ->getEngine() . ':' . PHP_EOL
            . $this->getEngine()->getModel();
    }

}

class Engine {
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    /**
     * Engine constructor.
     * @param $model
     * @param $power
     * @param $displacement
     * @param $efficiency
     */
    public function __construct($model, $power, $displacement, $efficiency)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }

    /**
     * @return mixed
     */
    public function getEngineModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return string
     */
    public function getDisplacement(): string
    {
        return $this->displacement;
    }

    /**
     * @return string
     */
    public function getEfficiency(): string
    {
        return $this->efficiency;
    }

}

$car = new Car();

$car->



$cars = [];
$engines = [];

$enginesInput = trim(fgets(STDIN));

for ($i = 0; $i<$enginesInput; $i++){
    $engineRow = explode(' ', trim(fgets(STDIN)));
    $model = $engineRow[0];
    $power = intval($engineRow[1]);


    if (count($engineRow) == 2){
        $engine = new Engine($model, $power, $displacement = 'n/a', $efficiency = 'n/a');
    }
    if (count($engineRow) == 3){
        if (is_numeric($engineRow[2])){
            $displacement = intval($engineRow[2]);
            $engine = new Engine($model, $power, $displacement, $efficiency = 'n/a');
        }
        else {
            $efficiency = $engineRow[2];
            $engine = new Engine($model, $power, $displacement = 'n/a', $efficiency);
        }
    }
    else {
        $displacement = $engineRow[2];
        $efficiency = $engineRow[3];
        $engine = new Engine($model, $power, $displacement, $efficiency);
    }


    $engines[] = $engine;

}


$carsInput = trim(fgets(STDIN));

for ($i = 0; $i<$carsInput; $i++){
    $carRow = explode(' ', trim(fgets(STDIN)));
    $model = $carRow[0];
    $carEngine = '';

    foreach ($engines as $engine){
        if ($engine->getEngineModel() == $carRow[1]){
            $carEngine = $engine;
        }
    }

    if (count($carRow) == 2){
        $car = new Car($model, $carEngine, $weight='n/a', $color='n/a');
    }

    if (count($carRow) == 3){
        if (is_numeric($carRow[2])){
            $weight = intval($carRow[2]);
            $car = new Car($model, $carEngine, $weight, $color='n/a');
        }
        else {
            $color = $carRow[2];
            $car = new Car($model, $carEngine, $weight='n/a', $color);
        }
    }
    if (count($carRow) > 3){
        $weight = $carRow[2];
        $color = $carRow[3];
        $car = new Car($model, $carEngine, $weight, $color);
    }


    $cars[] = $car;
}

foreach ($cars as $car){
    echo $car->getModel() . ":" . PHP_EOL;
    echo "  " . $car->getEngine()->getEngineModel() . ":" . PHP_EOL;
    echo "    Power: " . $car->getEngine()->getPower() . PHP_EOL;
    echo "    Displacement: " . $car->getEngine()->getDisplacement() . PHP_EOL;
    echo "    Efficiency: " . $car->getEngine()->getEfficiency() . PHP_EOL;
    echo "  Weight: " . $car->getWeight() . PHP_EOL;
    echo "  Color: " . $car->getColor() . PHP_EOL;
}