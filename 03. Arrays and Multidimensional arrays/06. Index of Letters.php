<?php

$input = fgets(STDIN);
$input = strtolower(trim($input));

for ($i = 0; $i <strlen($input); $i++) {
    echo $input[$i] . " -> " . intval(ord($input[$i]) - 97) . "\n";
}


?>