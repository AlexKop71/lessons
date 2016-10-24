<?php
    // Создаем массивы

    $season['Winter'] = "Зима";
    $season['Spring'] = "Весна";
    $season['Summer'] = "Лето";
    $season['Autumn'] = "Осень";

        // зима
    $mounth['Winter'][] = 'Декабрь';
    $mounth['Winter'][] = 'Январь';
    $mounth['Winter'][] = 'Февраль';

    // весна
    $mounth['Spring'][] = 'Март';
    $mounth['Spring'][] = 'Апрель';
    $mounth['Spring'][] = 'Май';

    // лето
    $mounth['Summer'][] = 'Июнь';
    $mounth['Summer'][] = 'Июль';
    $mounth['Summer'][] = 'Август';

    // осень
    $mounth['Autumn'][] = 'Сентябрь';
    $mounth['Autumn'][] = 'Октябрь';
    $mounth['Autumn'][] = 'Ноябрь';


    // выведем все элементы массива
    foreach ($mounth as $key => $value){

        //названия времен года
        echo $season[$key].":<br />";

        //названия месяцев
        foreach ($value as $subvalue){
            echo $subvalue."<br />";
        }
        echo "<br />";
    }