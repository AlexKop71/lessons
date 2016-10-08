<?php

function Welcome (){
    $name = "Алексей" ;
    $surname = "Коптяев" ;
    echo "Здравствуй". "$name". "$surname". "!";
}
Welcome() ;

function CheckAge ($age){
    if($age>18 and $age<59){
        echo "Вам ещё работать и работать";
    }
    if($age>59){
        echo "Вам пара на пенсию";
    }
    if($age<18){
        echo "Вам ещё рано работать";
    }
    }
CheckAge(60);


for ($i=0 ; $i <= 100 ; $i%2==0 );