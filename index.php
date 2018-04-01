<?php

require __DIR__ . '/autoload.php';
/*
$news = \App\Models\Article::findLast(3);

include __DIR__ . '/templates/index.php';
*/


$article = new \App\Models\Article();

$article->title = 'Измененный заголовок новости';
$article->content = 'Измененный текст';
$article->id = 2;

$article->update();
