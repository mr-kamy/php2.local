<?php

require __DIR__ . '/autoload.php';
/*
$news = \App\Models\Article::findLast(3);

include __DIR__ . '/templates/index.php';
*/


$article = new \App\Models\Article();

$article->title = 'Заголовок новости';
$article->content = 'Опять что-то произошло';

$article->insert();

var_dump($article);