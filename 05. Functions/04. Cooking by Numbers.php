<?php

//$number = intval(fgets(STDIN));
//$commands = array_map('trim', explode(', ', fgets(STDIN)));

foreach ($commands as $command){
    $number = checkCommand($command, $number);
    echo $number . "\n";

}

function checkCommand($command, $number){

    switch ($command){
        case 'chop':
            return $number/2;
            break;
        case 'dice':
            return sqrt($number);
            break;
        case 'spice':
            return ++$number;
            break;
        case 'bake':
            return $number *= 3;
            break;
        case 'fillet':
            return $number * 0.8;
            break;
    }


}






?>