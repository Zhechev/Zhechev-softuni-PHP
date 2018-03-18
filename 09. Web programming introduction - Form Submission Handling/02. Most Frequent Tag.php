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

session_start();

if (isset($_GET['tags']) && $_GET['tags'] != '') {
    $tags = array_map('trim', explode(', ', $_GET['tags']));

    if (!isset($_SESSION['output'])){
        $_SESSION['output'] = [];
    }

        foreach ($tags as $tag) {
            if (!array_key_exists($tag, $_SESSION['output']) && $tags != '') {
                $_SESSION['output'][$tag] = 1;
            } else {
                $_SESSION['output'][$tag]++;
            }
        }
        arsort($_SESSION['output']);

    $html = '';

        foreach ($_SESSION['output'] as $key => $value) {
            if ($value == 1) {
                $html .= $key . " : " . $value . " time <br />";
            } else {
                $html .= $key . " : " . $value . " times <br />";
            }
        }


        $mostFreq = key($_SESSION['output']);


        echo $html . "<br />";
        echo "Most Frequent Tag is: " . $mostFreq;

}
else {
        $_SESSION['output'] = [];

}


?>


<form method="get">
    <input type="text" name="tags">
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="clear" value="=Clear">
</form>
</body>
</html>