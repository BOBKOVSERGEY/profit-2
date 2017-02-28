<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findAll();

echo '<pre>';
var_dump($news);
echo '</pre>';