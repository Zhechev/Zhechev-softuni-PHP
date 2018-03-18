<?php

$array = fgets(STDIN);
$array = array_map('trim', explode(' ', $array));

$leftSum = 0;
$rightSum = 0;

$flag = false;

for ($i = 0; $i < count($array); $i++){

    for ($j = 0; $j< $i; $j++){
        $leftSum += $array[$j];
    }

    for ($k = $i+1; $k < count($array);$k++){
        $rightSum += $array[$k];
    }

    if ($rightSum == $leftSum){
        $flag = true;
        echo $i;
        break;
    }


    $leftSum = 0;
    $rightSum = 0;
}

if (!$flag){
    echo 'no';
}



?>

