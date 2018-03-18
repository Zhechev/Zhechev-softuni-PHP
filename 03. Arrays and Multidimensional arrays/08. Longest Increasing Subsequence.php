
Skip to content
This repository

    Pull requests
    Issues
    Gist

    @Zhechev

1
0

    3

vdonchev/PhpFundamentals
Code
Issues 0
Pull requests 0
Projects 0
Wiki
Pulse
Graphs
PhpFundamentals/04.Arrays/08.LIS.php
67a39e5 on 1 Feb
@vdonchev vdonchev Add solutions to Arrays exercise
39 lines (33 sloc) 711 Bytes
<?php
$arr = preg_split('/\s+/', trim(fgets(STDIN)));
$length = [];
$prev = [];
for ($i = 0; $i < count($arr); $i++) {
    $length[$i] = 1;
    $prev[$i] = -1;
    for ($j = 0; $j < $i; $j++) {
        if ($arr[$i] > $arr[$j]) {
            if ($length[$j] + 1 > $length[$i]) {
                $prev[$i] = $j;
                $length[$i] = $length[$j] + 1;
            }
        }
    }
}
$max = 0;
$index = -1;
for ($i = 0; $i < count($length); $i++) {
    if ($length[$i] > $max) {
        $max = $length[$i];
        $index = $i;
    }
}
$res = [];
while (true) {
    if ($index == -1) {
        break;
    }
    array_unshift($res, $arr[$index]);
    $index = $prev[$index];
}
echo implode(' ', $res);

    Contact GitHub API Training Shop Blog About 

    © 2017 GitHub, Inc. Terms Privacy Security Status Help 

