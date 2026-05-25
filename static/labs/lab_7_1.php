<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 7.1</title>
</head>
<body>
<?php
    function printArray($array) {
        foreach ($array as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }

    $a = [1, 3, 6, 10, 15, 21, 28, 36, 45, 55];
    $b = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];

    printArray($a);
    printArray($b);

    $c = array_merge($a, $b);
    printArray($c);

    sort($c);
    printArray($c);

    array_shift($c);
    printArray($c);

    $d = array_unique($c);
    printArray($d);
?>
</body>
</html>
