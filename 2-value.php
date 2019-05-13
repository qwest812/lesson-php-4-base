<?php
//$var = 'Боб';
//$Var = 'Джо';
//echo "$var, $Var";
//
//$4site = 'еще нет';
//$_4site = 'еще нет';
//$täyte = 'mansikka';

$f=5;
$n=&$f;

var_dump($n);


$f=6;

$b='f';

$n=$$b;
var_dump($n);