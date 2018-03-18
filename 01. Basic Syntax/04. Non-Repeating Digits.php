<?php

$input = 1234;


for ($i= 100; $i <= $input; $i++){
    if ($i >= 1000) {
        break;
    }
    else if ($input < 100){
        echo "No";
        break;
    }
    else {
        $thirdDigit =  $i % 10 . "<br>\n";
        $secondDigit = floor($i % 100 / 10) . "<br>\n";
        $firstDigit = floor($i % 1000 / 100);
        if ($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit){
            echo $i . ", ";
        }
    }
}

?>

