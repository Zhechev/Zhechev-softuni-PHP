<?php

$input = array_map('trim', (explode(', ', fgets(STDIN))));

for ($i=0; $i<count($input); $i+=2){
    $result = checkArea($input[$i], $input[$i+1]);
    echo $result . "\n";

}

    function checkArea($x, $y)
    {
        //Tuvalu island

        $xTuvalu1 = 1;
        $xTuvalu2 = 3;

        $yTuvalu1 = 1;
        $yTuvalu2 = 3;

        //Samoa island
        $xSamoa1 = 5;
        $xSamoa2 = 7;

        $ySamoa1 = 3;
        $ySamoa2 = 6;

        //Tonga island
        $xTonga1 = 0;
        $xTonga2 = 2;

        $yTonga1 = 6;
        $yTonga2 = 8;

        //Cook island
        $xCook1 = 4;
        $xCook2 = 9;

        $yCook1 = 7;
        $yCook2 = 8;

        //Tokelau island
        $xTokelau1 = 8;
        $xTokelau2 = 9;

        $yTokelau1 = 0;
        $yTokelau2 = 1;


        if ($x >= $xTuvalu1 && $x <= $xTuvalu2 && $y >= $yTuvalu1 && $y <= $yTuvalu2) {
            return 'Tuvalu';

        } elseif ($x >= $xSamoa1 && $x <= $xSamoa2 && $y >= $ySamoa1 && $y <= $ySamoa2) {
            return 'Samoa';

        } elseif ($x >= $xTonga1 && $x <= $xTonga2 && $y >= $yTonga1 && $y <= $yTonga2) {
            return 'Tonga';
        }

          elseif ($x >= $xCook1 && $x <= $xCook2 && $y >= $yCook1 && $y <= $yCook2) {
            return 'Cook';
        }

        elseif ($x >= $xTokelau1 && $x <= $xTokelau2 && $y >= $yTokelau1 && $y <= $yTokelau2) {
            return 'Tokelau';
        }
        else{
            return 'On the bottom of the ocean';
        }
    }
?>