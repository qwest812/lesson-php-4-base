<!--error_reporting = E_ALL & ~E_NOTICE  php.ini-->
<!--error_reporting = E_ALL & ~E_NOTICE php.ini-->
<br />
<!--php_flag display_errors On<br /> htaccess-->
<!--php_value error_reporting E_ALL<br />htaccess-->

<!--error_reporting(E_ALL);  php -->
<!--ini_set("display_error", true);  php-->
<!--ini_set("error_reporting", E_ALL);   php-->

<?php

// Выключение протоколирования ошибок
error_reporting(0);

// Включать в отчет простые описания ошибок
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Включать в отчет E_NOTICE сообщения (добавятся сообщения о
// непроинициализированных переменных или ошибках в именах переменных)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Добавлять сообщения обо всех ошибках, кроме E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Добавлять в отчет все ошибки PHP (см. список изменений)
error_reporting(E_ALL);

// Добавлять в отчет все ошибки PHP
error_reporting(-1);

// То же, что и error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);






function shutdown() {
    $error = error_get_last();
    if (
        // если в коде была допущена ошибка
        is_array($error) &&
    // и это одна из фатальных ошибок
    in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])
    ) {
        // очищаем буфер вывода
        while (ob_get_level()) {
            ob_end_clean();
        }
        // выводим описание проблемы
        echo 'Сервер находится на техническом обслуживании, зайдите позже';
    }
}
register_shutdown_function('shutdown');



try {
    // код который может выбросить исключение
    if (rand(0, 1)) {
        throw new Exception('One');
    } else {
        echo 'Zero';
    }
} catch (Exception $e) {
    // код который может обработать исключение
    echo $e->getMessage();
}finally {
    echo "finally";
    // код, который будет выполнен при любом раскладе
}





//PHP7


try {
    // файл, который вызывает ошибку парсера
    include 'e_parse_include.php';
} catch (Error $e) {
    var_dump($e);
}