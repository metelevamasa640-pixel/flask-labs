<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 7.5</title>
</head>
<body>
<?php
    function printAssoc($array) {
        foreach ($array as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
        echo "<br>";
    }

    $student = [
        "cnum" => 2001,
        "cname" => "Hoffman",
        "city" => "London",
        "snum" => 1001,
        "rating" => 100
    ];

    printAssoc($student);

    asort($student);   // сортировка по значениям с сохранением ключей
    printAssoc($student);

    ksort($student);   // сортировка по ключам
    printAssoc($student);

    sort($student);    // сортировка по значениям с перенумерацией ключей
    printAssoc($student);
?>
</body>
</html>
