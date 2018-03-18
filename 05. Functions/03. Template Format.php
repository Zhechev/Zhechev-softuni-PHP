<?php

$input = trim(fgets(STDIN));
$input = explode(', ', $input);
$assArr = [];


    for ($i = 0; $i < count($input); $i += 2) {
        $assArr[$input[$i]] = $input[$i + 1];
    }

    $output = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\n";
    $output .= "<quiz>\n";

    foreach ($assArr as $key => $value) {
        $output .= "  <question>\n    $key\n  </question>\n";
        $output .= "  <answer>\n    $value\n  </answer>\n";
    }
    $output .= "</quiz>";


echo $output;



?>