<?php
$array = array_map('trim', explode(' ', fgets(STDIN)));

$numbers = [];

foreach ($array as $num){
    if (!array_key_exists($num, $numbers)){
        $numbers[$num] = 0;
    }
    else {
        $numbers[$num]++;
    }
}

$best = 0;
$num = 0;

foreach ($numbers as $number => $value){
    if ($value > $best){
        $best = $value;
        $num = $number;
    }
}

echo $num;

?>