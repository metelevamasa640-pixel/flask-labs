<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 5.5</title>
</head>
<body>
<?php
    $lang = $_GET["lang"] ?? "unknown";

    if ($lang == "ru") {
        echo "Русский";
    } elseif ($lang == "en") {
        echo "Английский";
    } elseif ($lang == "fr") {
        echo "Французский";
    } elseif ($lang == "de") {
        echo "Немецкий";
    } else {
        echo "язык неизвестен";
    }
?>
</body>
</html>
