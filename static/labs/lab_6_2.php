<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Лабораторная 6.2</title>
</head>
<body>
<table border="1" cellpadding="4" cellspacing="0">
<?php
    for ($i = 0; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 9; $j++) {
            if ($i == 0 && $j == 0) {
                echo '<td><font color="red">+</font></td>';
            } elseif ($i == 0) {
                echo '<td><font color="blue">' . $j . '</font></td>';
            } elseif ($j == 0) {
                echo '<td><font color="blue">' . $i . '</font></td>';
            } else {
                $color = ($i == $j) ? "red" : "black";
                echo '<td><font color="' . $color . '">' . ($i + $j) . '</font></td>';
            }
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>
