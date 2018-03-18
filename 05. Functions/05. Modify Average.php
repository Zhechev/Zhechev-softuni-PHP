<?php

$number = trim(fgets(STDIN));

$sum = 0;
while (true){
    for ($i=0; $i < strlen($number);$i++){
        $sum += $number[$i];
    }

    if ($sum / strlen($number) > 5){
        break;
    }
    else {
        $number .= 9;
        $sum = 0;
    }
}

echo $number;

?>