<?php

$input = fgets(STDIN);
$input = explode(' ', $input);
$n = fgets(STDIN);
$sum = array_fill(0, count($input), 0);
$summ = 0;


for ($l = 0; $l < $n; $l++) {
    $temp = $input[count($input) - 1];
    for ($i = count($input) - 1; $i >= 1; $i--) {
        $input[$i] = $input[$i - 1];
        $sum[$i] += $input[$i];
    }
    $input[0] = $temp;
    $summ += $temp;

}

$sum[0] = $summ;

$input = implode(' ', $input);
$sum = implode(' ', $sum);


echo $sum;
?>