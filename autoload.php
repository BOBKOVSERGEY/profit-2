<?php

function myAppAutoload($class)
{
    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($filename)) {
        include $filename;
    }
}

spl_autoload_register('myAppAutoload');
/* Первый способ */

/* Второй способ */
spl_autoload_register(function ($class)
{
    $filename = __DIR__ . '/' . str_replace(['\\', 'App'], ['/', 'lib'], $class) . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
});