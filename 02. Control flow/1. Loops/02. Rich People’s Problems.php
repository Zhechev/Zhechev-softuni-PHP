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

if(isset($_GET['cars'])){
    $cars = $_GET['cars'];
    $cars = explode(', ', $cars);
    $html = "<table border=1px>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>";

    $colors = ['yellow', 'green', 'black', 'white', 'blue', 'red'];

    for ($i = 0; $i <= count($cars)-1; $i++){
        $randomColor = array_rand($colors);
        $randomNumber = rand(0, 5);
        $html .= "<tr>
                    <td>$cars[$i]</td>
                    <td>$colors[$randomColor]</td>
                    <td>$randomNumber</td>
                </tr>";
    }


}

?>


<form>
    Enter cars <input type="text" name="cars"/> <input type="submit" value="Show Result">

    <?= $html ?>
</form>
</body>
</html>