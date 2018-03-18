<?php

$input = array_map('trim', explode(', ', fgets(STDIN)));


for ($i = 0; $i<count($input); $i+=3){
    $result = checkInsidePoints($input[$i], $input[$i+1], $input[$i+2]);
    if ($result) {
        echo "inside" . "\n";
    }
    else {
        echo "outside" . "\n";
    }

}

function checkInsidePoints (float $x, float $y, float $z) : bool
{
    $x1 = 10;
    $x2 = 50;
    $y1 = 20;
    $y2 = 80;
    $z1 = 15;
    $z2 = 50;

    return (($x >= $x1 && $x <= $x2) && ($y>= $y1 && $y <= $y2) && ($z >= $z1 && $z <= $z2));
}

?>