<?php

$array = fgets(STDIN);
$array = array_map('trim', explode(' ', $array));
$longestSeq = 1;
$currentSeq = 1;
$number = 0;

if (count($array) == 1){
    echo $array[0];
}
else {
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] == $array[$i - 1]) {
            $currentSeq++;
        } else {
            $currentSeq = 1;
        }

        if ($currentSeq > $longestSeq) {
            $longestSeq = $currentSeq;
            $number = $array[$i];
        }
    }


    $result = implode(' ', array_fill(0, $longestSeq, $number));

    if ($longestSeq == 1){
        echo $array[0];
    }
    else {
        echo $result;
    }
}

/* <?php
$arr = array_filter(array_map('trim', explode(' ', fgets(STDIN))));
$longest = 0;
$startIndex = -1;
for ($i = 0; $i < count($arr); $i++) {
    $currentCount = 1;
    for ($k = $i + 1; $k < count($arr); $k++) {
        if ($arr[$k] == $arr[$i]) {
            $currentCount++;
        } else {
            break;
        }
    }
    if ($currentCount > $longest) {
        $longest = $currentCount;
        $startIndex = $i;
    }
}
echo implode(' ', array_fill(0, $longest, $arr[$startIndex])); */

?>