<?php

require __DIR__ . '/autoload.php';

$a = new \App\Collection();
$a[] = 1;
$a[1] = 11;
$a[2] = 234;

foreach ($a as $el)
{
    echo $el . '<br>';
}

echo '<pre>';
print_r($a);
echo '</pre>';