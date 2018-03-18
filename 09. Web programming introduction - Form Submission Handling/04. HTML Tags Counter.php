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

<form method="get">
    <input type="text" name="tag">
    <input type="submit" name="submit" value="Submit">
</form>

<?php

$validHtmlTags = ["!DOCTYPE", "a", "abbr", "acronym", "address", "applet",
    "area", "article", "aside", "audio", "b", "base", "basefont", "bdi", "bdo",
    "big", "blockquote", "body", "br", "button", "canvas", "caption", "center",
    "cite", "code", "col", "colgroup", "datalist", "dd", "del", "details", "dfn",
    "dialog", "dir", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption",
    "figure", "font", "footer", "form", "frame", "frameset", "h1 to h6", "head",
    "header", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen",
    "label", "legend", "li", "link", "main", "map", "mark", "menu", "menuitem", "meta",
    "meter", "nav", "noframes", "noscript", "object", "ol", "optgroup", "option", "output",
    "p", "param", "picture", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script",
    "section", "select", "small", "source", "span", "strike", "strong", "style", "sub", "summary",
    "sup", "table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr",
    "track", "tt", "u", "ul", "var", "video", "wbr"];


session_start();
if (isset($_GET['tag'])) {

    $tag = trim($_GET['tag']);

    if (!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }


    if (in_array($tag, $validHtmlTags)) {
        $_SESSION['score']++;
        echo "Valid HTML tag!<br />";
        echo "Score: " . $_SESSION['score'];
    }
    else {
        echo "Invalid HTML tag!";
        echo "Score: " . $_SESSION['score'];
    }
}

?>

</body>
</html>