<?php


$input = array_map('trim', explode(' ', fgets(STDIN)));
$out = [];


foreach ($input as $item){
    if (array_key_exists($item, $out)){
        $out[$item] ++;
    }
    else {
        $out[$item] = 1;
    }
}

ksort($out);

foreach ($out as $key => $value){
    echo "{$key} -> {$value} times \n";
}

?>