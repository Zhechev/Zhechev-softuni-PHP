<?php

$speed = intval(trim(fgets(STDIN)));
$area = trim(fgets(STDIN));

$speedlimit = getLimit($area);
$overSpeed = getOverSpeed($speed, $speedlimit);
if ($overSpeed) {
    echo $overSpeed;
}

function getOverSpeed($speed, $speedlimit)
{
    $overSpeed = $speed - $speedlimit;

    if ($overSpeed < 0){
        $result = false;
    }
    else {
        switch ($overSpeed){
            case $overSpeed > 0 && $overSpeed <= 20:
                $result = 'speeding';
                break;
            case $overSpeed > 20 && $overSpeed<= 40:
                $result = 'excessive speeding';
                break;
            default:
                $result = 'reckless driving';
        }
    }

    return $result;
}

function getLimit (string $area) : int
{
    switch ($area){
        case 'motorway':
            $speedlimit = 130;
            break;
        case 'interstate':
            $speedlimit = 90;
            break;
        case 'city':
            $speedlimit = 50;
            break;
        case 'residential':
            $speedlimit = 20;
            break;
        default:
            echo "Not a Valid Input";
            $speedlimit = 1000;

    }

    return $speedlimit;
}



?>