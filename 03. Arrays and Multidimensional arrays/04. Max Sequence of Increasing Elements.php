<?php

$array = fgets(STDIN);
$array = array_map('trim', explode(' ', $array));

$number = 0;
$currentSequence = 1;
$longestSequence = 1;

if (count($array) == 1){
    echo $array[0];
}
else {

    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] < $array[$i + 1]) {
            $currentSequence++;
        } else {
            $currentSequence = 1;
        }

        if ($currentSequence > $longestSequence) {
            $longestSequence = $currentSequence;
            $number = $array[$i + 1] - $longestSequence + 1;
        }
    }

    $result = [];
    for ($i = 0; $i < $longestSequence; $i++) {
        $result[] = $number;
        $number++;
    }


    $result = implode(' ', $result);

    echo $result;
}

?>