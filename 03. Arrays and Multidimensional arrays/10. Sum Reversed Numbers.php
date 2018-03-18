<?php
$array = fgets(STDIN);

$array = array_map('trim', explode(' ', $array));
$sum = 0;
foreach ($array as $num){
    $num = strrev($num);
    $sum += $num;
}

echo $sum;


?>