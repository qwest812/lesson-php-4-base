<?php
//$f=echo "sdfsd";

$d =print ("sdfds");
var_dump($d);

print <<<'END'
Здесь используется синтаксис "here document" для вывода
нескольких строк с подстановкой переменных $variable.
Заметьте, что закрывающий идентификатор должен
располагаться в отдельной строке, никаких пробелов!
END;



$int= 0;

echo "<br>";
var_dump($int++);
echo "<br>";
var_dump(++$int);