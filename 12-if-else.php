<?php
if ($a > $b) {
    echo "a больше, чем b";
} elseif ($a == $b) {
    echo "a равен b";
} else {
    echo "a меньше, чем b";
}


if($a > $b):
    echo $a." больше, чем ".$b;
elseif($a == $b): // Заметьте, тут одно слово.
    echo $a." равно ".$b;
else:
    echo $a." не больше и не равно ".$b;
endif;

//сокращенный вариант
$res = "fdf" ? "sdfsd" : "sdfsdf";

if(true){
    echo "<div>Yess</div>";
}else{
    echo "<div>Bad</div>";

}