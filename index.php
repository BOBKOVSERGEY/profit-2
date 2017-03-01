<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI']; // по ключику находится строка которую ввел пользователь

$controller = new \App\Controllers\News();

$action = $_GET['action'] ? : 'Index';


try {
    $controller->action($action); // попробуй (возьми) не безопасный код
} catch (\App\Exceptions\Core $e) { // на если возникло исключение класса exception  - обработай его
    echo 'Возникло исключение приложения ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    echo 'Что-то не так с базой ' . $e->getMessage();
}