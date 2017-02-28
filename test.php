<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findAll();
echo '<pre>';
print_r($news[0]->author);
echo '</pre>';
//echo '<pre>';
//var_dump($news);
//echo '</pre>';