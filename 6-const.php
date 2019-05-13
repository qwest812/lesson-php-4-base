<?php

define("CONSTANT", "Здравствуй, мир.");
echo CONSTANT; // выводит "Здравствуй, мир."
echo Constant; // выводит "Constant" и предупреждение.


// Работает, начиная с версии PHP 5.3.0
const CONSTANT = 'Здравствуй, мир.';

echo CONSTANT;

// Работает, начиная с версии PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Прощай, мир.';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // выводит "cat"

// Работает в PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // выводит "cat"
?>