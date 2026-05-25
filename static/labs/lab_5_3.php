<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 5.3</title>
</head>
<body>
<?php
    $food = "gamburger";
    $drink = "tea";

    // Ссылка на другую переменную
    $linkToDrink =& $drink;

    echo $food . "<br>";
    echo $linkToDrink . "<br>";
?>
</body>
</html>
