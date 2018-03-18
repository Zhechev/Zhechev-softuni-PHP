<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Problem 7 - Get Form Data</title>
</head>
<body>

<?php

if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['sex'])){
    $name = ($_GET['name']);
    $age = ($_GET['age']);
    $sex = ($_GET['sex']);

    echo "My name is $name. I am $age years old. I am $sex.";
}

?>

<main>
    <form id="myForm">
        <input type="text" name="name" id="name" placeholder="Name..">
        <br>
        <input type="number" name="age" id="age" placeholder="Age..">
        <br>
        <input type="radio" id="sexMale" name="sex" value="male">Male
        <br>
        <input type="radio" id="sexFemale" name="sex" value="female">Female
        <br>
        <input type="submit" value="Изпращане" name="mySubmit">
        <br>
    </form>
</main>
</body>
</html>