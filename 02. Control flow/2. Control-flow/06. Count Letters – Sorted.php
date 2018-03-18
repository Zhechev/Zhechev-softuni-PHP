<?php

$word = 'apple';
$word = str_split($word);

$result = [];

foreach ($word as $key => $value){
    if (!array_key_exists($value, $result)){
        $result[$value] = 1;
    }
    else {
        $result[$value]++;
    }
}

arsort($result);

foreach ($result as $k => $v){
    echo $k . ' -> ' . $v . "<br />";
}

?>