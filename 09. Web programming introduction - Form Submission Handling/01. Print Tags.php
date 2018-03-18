<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ol {
            counter-reset: item;
            list-style-type: none;
        }
        li { display: block; }
        li:before {
            content: counter(item) ": ";
            counter-increment: item
        }
    </style>
</head>
<body>


<form method="get">
    <input type="text" name="tags">
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if (isset($_GET['tags'])) {
    $tags = array_map('trim', explode(', ', $_GET['tags']));


    $html = "<ol>";
    $n = 0;
    foreach ($tags as $tag) {
        $html .= "<li>" . $tag . "</li><br />";
        $n++;
    }

    $html .= "</ol>";

echo $html;


}

?>





</body>
</html>