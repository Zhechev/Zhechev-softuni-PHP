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

if (isset($_GET['inputStrings'])){
    $numbers = array_map('trim', explode(',', $_GET['inputStrings']));

    $html = "<table border=1px>";
    $sum = 0;
    foreach ($numbers as $number){

            if (!is_numeric($number)){
                $html .= "<tr><td>$number</td><td>I cannot sum that</td></tr>";
            }
            else {

                for ($i = 0; $i <= strlen($number)-1; $i++){
                    $sum += intval($number[$i]);
                }
                $html .= "<tr><td>$number</td><td>$sum</td></tr>";
            }
            $sum = 0;
    }
    $html .= "</table>";

    echo $html;
}

?>


<form>
    Input srings: <input type="text" name="inputStrings" />  <input type="submit" value="Submit">
</form>
</body>
</html>