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

if (isset($_GET['input']) && !empty(trim($_GET['input']))){
    $input = trim($_GET['input']);


    for ($i = 0; $i<strlen($input); $i++){
        if ($input[$i] != ' ') {
            $color = ord($input[$i]) % 2 == 0 ? "red" : "blue";
            echo "<font color='$color'>$input[$i] </font>";
        }
    }

}

?>



<form>
    <input type="text" name="input" />
    <input type="submit" value="Color text">
</form>
</body>
</html>