<?php

require __DIR__ . '/../../autoload.php';

$view = new \App\View();

$view->news = \App\Models\Article::findLast(3);

$template = __DIR__ . '/../../templates/admin.php';

$view->display($template);