<?php

$sum = 0;
$html = "";

$html .= "<table border='1px'><th>Number</th><th>Square</th>";
for ($i = 0; $i <= 100; $i+=2){
    $sqrt = round(sqrt($i), 2);
    $sum += $sqrt;
    $html .= "<tr><td>$i</td><td>$sqrt</td></tr>";
}
$html .= "<th>Total:</th><th>$sum</th>";
$html .= "</table>";

echo $html;


?>