<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\Article::findLast(3);

var_dump($news);