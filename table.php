<!DOCTYPE html>
<html lang="ru">

<head>

    <!--Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="Author" content="<Клуб интеллектуалов" />
    <!--End Meta-->

    <title>Таблица умножения</title>

    <!--CSS-->
    <link href="style/style.css" rel="stylesheet" />
    <!--End CSS-->

</head>


<body >

<h2><center>Таблица умножения</center></h2>
<form method="post">
    <table border=1 align=center  cellspacing=0>
        <tr>
            <td><i>Количество строк:</i></td>
            <td><input type="text" name="tr"></td>
        </tr>
        <tr>
            <td><i>Количество столбцов:</i></td>
            <td><input type="text" name="td"></td>
        </tr>
        <tr>
            <td><i>Цвет:</i></td>
            <td><input type="text" name="color"></td>
        </tr>
    </table><br />
    <center><input type="submit" name="ok" value="Создать"></center>
</form>
<hr>
<?php
// инициализация значений
$cols = $_POST["td"];// столбцы
$rows = $_POST["tr"];// строки
$color = $_POST["color"];// цвет

echo "<table border=1 align=center cellpadding=5 cellspacing=0><br />\n\n\t";

for($tr=1;$tr<=$rows;$tr++)
{
    echo "<tr>";

    for($td=1;$td<=$cols;$td++)
    {
        if($tr==1)
        {
            echo "<th bgcolor=$color>".$td*$tr."</th>";
        }
        elseif($td==1)
        {
            echo "<td align=center bgcolor=$color><strong>".$td*$tr."</strong></td>";
        }
        else
        {
            echo "<td align=center>".$td*$tr."</td>";
        }
    }
    echo "</tr><br />\n\t";
}
echo "\n\t</table>\n";

/*
ЗАДАНИЕ 1
- Создайте две числовые переменные $cols и $rows
- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10

ЗАДАНИЕ 2
- Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
    - Число столбцов должно быть равно значению переменной $cols
    - Число строк должно быть равно значению переменной $rows
    -  Ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
- Рекомендуется использовать цикл for

ЗАДАНИЕ 3
- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
- Фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
*/
?>
</body>
</html>
