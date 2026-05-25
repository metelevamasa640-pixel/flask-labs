<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 5.7</title>
</head>
<body>
<?php
    $lang = $_GET["lang"] ?? "ru";

    switch ($lang) {
        case "ru":
            echo "привет";
            break;
        case "en":
            echo "hello";
            break;
        case "fr":
            echo "bonjour";
            break;
        case "de":
            echo "guten tag";
            break;
        default:
            echo "приветствие неизвестно";
    }
?>
</body>
</html>
