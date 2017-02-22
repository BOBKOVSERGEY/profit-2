<?php
use App\Model;
use App\Models\User;
require __DIR__ . '/autoload.php';

$users = User::findAll();


function sendEmail(Model $user, $message)
{
    echo 'Почта уходит на ' . $user->email;
}
sendEmail($users[1], 'Hello');

echo '<pre>';
print_r($users);
echo '</pre>';