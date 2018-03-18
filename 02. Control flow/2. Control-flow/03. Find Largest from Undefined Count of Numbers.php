<?php

$largest = PHP_INT_MIN;
while ($number = intval(fgets(STDIN))){
    if ($number > $largest){
        $largest = $number;
    }
}

echo "Max: $largest";

?>