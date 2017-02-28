<?php
require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->title = 'Мой крутой сайт';
$view->desc = 'сайт про новости';
$view->users = \App\Models\User::findAll();

echo count($view);

echo $view->display(__DIR__ . '/App/templates/index.php');