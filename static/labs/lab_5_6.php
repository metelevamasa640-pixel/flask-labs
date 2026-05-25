<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 5.6</title>
</head>
<body>
<?php
    $lang = $_GET["lang"] ?? "ru";

    switch ($lang) {
        case "ru":
            echo "Русский";
            break;
        case "en":
            echo "Английский";
            break;
        case "fr":
            echo "Французский";
            break;
        case "de":
            echo "Немецкий";
            break;
        default:
            echo "Язык неизвестен";
    }
?>
</body>
</html>
