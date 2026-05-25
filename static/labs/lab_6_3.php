<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 6.3</title>
</head>
<body>
<?php
    function Ru($color) {
        print "<font color=\"$color\">Здравствуйте!</font><br>";
    }

    function En($color) {
        print "<font color=\"$color\">Hello!</font><br>";
    }

    function Fr($color) {
        print "<font color=\"$color\">Bonjour!</font><br>";
    }

    function De($color) {
        print "<font color=\"$color\">Guten Tag!</font><br>";
    }

    Ru("red");
?>
</body>
</html>
