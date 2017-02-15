<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

echo '<pre>';
print_r($users);
echo '</pre>';