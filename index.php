<?php
use App\Model;
use App\Models\User;
require __DIR__ . '/autoload.php';

$user = new User();

$user->name = 'Vasya';
$user->email = 'vasya@exzample.com';

$user->insert();

echo '<pre>';
print_r($users);
echo '</pre>';