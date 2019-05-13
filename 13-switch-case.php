<?php
if ($i == 0) {
    echo "i равно 0";
} elseif ($i == 1) {
    echo "i равно 1";
} elseif ($i == 2) {
    echo "i равно 2";
}

switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
}


//without break
switch ($i) {
    case 0:
        echo "i равно 0";
    case 1:
        echo "i равно 1";
    case 2:
        echo "i равно 2";
}


//empty
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i меньше чем 3, но неотрицательный";
        break;
    case 3:
        echo "i равно 3";
}


//default

switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
        echo "i не равно 0, 1 или 2";
}


//alter sy
switch ($i):
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
        echo "i не равно to 0, 1 или 2";
endswitch;


//Возможно использование точки с запятой вместо двоеточия после оператора case. К примеру :
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Хороший выбор';
        break;
    default;
        echo 'Пожалуйста, сделайте новый выбор...';
        break;
}