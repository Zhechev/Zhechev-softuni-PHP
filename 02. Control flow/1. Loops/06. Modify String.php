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

if (isset($_GET['str']) && isset($_GET['option'])){
    $input = $_GET['str'];
    $option = $_GET['option'];
    if ($option == "hash"){
        hashString($input);
    }
    else if ($option == "palindrome"){
        checkPalindrome($input);
    }
    else if ($option == "reverse"){
        reverseString($input);
    }
    else if ($option == "split"){
        splitString($input);
    }
    else if ($option == "shuffle"){
        shuffleString($input);
    }
}

function hashString($input)
{
    echo crypt($input);
}

function checkPalindrome($input)
{
    if ($input == strrev($input)){
        echo "$input is a palindrome!";
    }
    else echo "$input is not palindrome!";
}

function reverseString($input)
{
    echo strrev($input);
}

function splitString($input)
{
    $input = str_split($input);
    $input = implode(' ', $input);
    echo ($input);
}

function shuffleString($input)
{
    $input = str_shuffle($input);
    echo $input;
}

?>

<form>
    <fieldset>
        <legend>String operations</legend>
        <label for="str"></label>
        <input type="text" name="str" id="str" required>
        <input type="radio" name="option" value="palindrome" title="Check Palindrome" required> Check Palindrome
        <input type="radio" name="option" value="reverse" title="Reverse string"> Reverse string
        <input type="radio" name="option" value="split" title="Split"> Split
        <input type="radio" name="option" value="hash" title="Hash string"> Hash string
        <input type="radio" name="option" value="shuffle" title="Shuffle string"> Shuffle string
        <input type="submit">
    </fieldset>
</form>
</body>
</html>

