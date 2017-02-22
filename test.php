<?php

require __DIR__ . '/autoload.php';

$s = \App\Singleton::instance();
$s->counter = 1;
echo '<pre>';
print_r($s);
echo '</pre>';
$s = \App\Singleton::instance();

echo '<pre>';
print_r($s);
echo '</pre>';