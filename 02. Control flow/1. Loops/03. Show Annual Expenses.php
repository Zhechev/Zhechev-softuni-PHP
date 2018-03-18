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

if (isset($_GET['years'])){
    $years = $_GET['years'];
    $year = 2014;
    $sum = 0;


    $html = "<table border=1px>";



        $html .= "<th>Year</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>August</th>
                  <th>September</th>
                  <th>October</th>
                  <th>November</th>
                  <th>December</th>
                  <th>Total:</th>";

        while ($years > 0){
            $html .= "<tr><td>$year</td>";
            for ($i = 0 ; $i < 12; $i++){
                $randomNumber = rand(0, 999);
                $html .= "<td>$randomNumber</td>";
                $sum += $randomNumber;
            }

            $html .= "<td>$sum</td>";

            $html .= "</tr>";
            $year --;
            $years --;
            $sum = 0;
        }

}

?>
<form>
    Enter number of years: <input type="text" name="years" /><input type="submit" value="Show costs">
</form>

<?= $html ?>

</body>
</html>