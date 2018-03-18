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

if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])
    && isset($_GET['categories']) != '' && isset($_GET['tags']) != '' && isset($_GET['months']) != ''){
    $categories = $_GET['categories'];
    $tags = $_GET['tags'];
    $months = $_GET['months'];

    $categories = array_map('trim', explode(', ', $categories));
    $tags = array_map('trim', explode(', ', $tags));
    $months = array_map('trim', explode(', ', $months));


    $html = "<h2>Categories</h2><ul>" . printArray($categories);
    echo $html;

    $html1 = "<h2>Tags</h2><ul>" . printArray($tags);
    echo $html1;

    $html2 = "<h2>Months</h2><ul>" . printArray($months);
    echo $html2;


}

function printArray(array $arr)
{
    $html = '';
    foreach ($arr as $item) {
        $html .= "<li>$item</li>";
    }
    $html .= "</ul>";

    return $html;
}



?>


<form>
    Categories:<input type="text" name="categories" /> <br />
    Tags:      <input type="text" name="tags" />  <br />
    Months:    <input type="text" name="months" /> <br />
    <input type="submit" value="Generate" name="generate" />
</form>


</body>
</html>