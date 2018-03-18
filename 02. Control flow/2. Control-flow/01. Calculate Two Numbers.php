<?php

$operations = $argv[1];

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

if ($operations == "sum"){
    echo " == " . ($numberOne + $numberTwo);
}
else if ($operations == "substract") {
    echo " == " . ($numberOne - $numberTwo);
}
else {
    echo " == Wrong operation supplied";
}

?>