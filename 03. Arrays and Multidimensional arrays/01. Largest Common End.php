<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


    $firstArray = fgets(STDIN);
    $secondArray = fgets(STDIN);
    $firstArray = explode(' ', $firstArray);
    $secondArray = explode(' ', $secondArray);
    $minLength = count($firstArray) > count($secondArray) ? count($secondArray) : count($firstArray);
    $currentLeft = 0;
    $currentRight = 0;


    for ($i = 0; $i < $minLength; $i++){
        if ($firstArray[$i] == $secondArray[$i]){
            $currentLeft++;
        }
        else {
            break;
        }
    }

    for ($i = 0; $i < $minLength; $i++){
        if ($firstArray[count($firstArray) - 1 - $i] == $secondArray[count($secondArray) - 1 - $i]){
            $currentRight++;
        }
        else {
            break;
        }
    }

        $best = $currentLeft > $currentRight ? $currentLeft : $currentRight;

    echo $best;
?>
<?php
/**
<?php
$arrA = array_filter(explode(' ', fgets(STDIN)));
$arrB = array_filter(explode(' ', fgets(STDIN)));
$best = 0;
$current = countCommon($arrA, $arrB);
$best = $current > $best ? $current : $best;
$arrA = array_reverse($arrA);
$arrB = array_reverse($arrB);
$current = countCommon($arrA, $arrB);
$best = $current > $best ? $current : $best;
echo $best;
function countCommon($arrA, $arrB)
{
    $length = min(count($arrA), count($arrB));
    $current = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($arrA[$i] == $arrB[$i]) {
            $current++;
        } else {
            break; // return; return; :P
        }
    }
    return $current;
} **/


?>



<form>
    <input type="text" name="firstInput" />
    <input type="text" name="secondInput" />
    <input type="submit" value="Submit" />
</form>

</body>
</html>

