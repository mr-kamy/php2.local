<?php

require __DIR__ . '/autoload.php';
/*
$news = \App\Models\Article::findLast(3);

include __DIR__ . '/templates/index.php';
*/


$article = new \App\Models\Article();

$article->id = 2;

