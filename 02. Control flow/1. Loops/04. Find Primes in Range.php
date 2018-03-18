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

<form>
    Starting Index: <input type="text" name="startIndex" /> End: <input type="text" name="endIndex"> <input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['startIndex']) && isset($_GET['endIndex'])) {
    $startIndex = $_GET['startIndex'];
    $endIndex = $_GET['endIndex'];

    for ($i = $startIndex; $i <= $endIndex; $i++) {
        $counter = 0;
        for ($l = 1; $l <= $i; $l++) {
            if ($i % $l == 0) {
                $counter++;
            }
        }

        printPrimeNumbers($counter, $i);

        $counter = 0;
    }
}

    function printPrimeNumbers ($counter, $i)
    {
        if ($counter == 2){
            echo "<b>$i </b>";
        }
        else {
            echo "$i ";
        }
    }


?>




</body>
</html>