<?php

require __DIR__ . '/../../autoload.php';

if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
    $id = $_GET['id'];

    $view = new \App\View();
    $view->article = \App\Models\Article::findById($id);

    $template = __DIR__ . '/../../templates/article.php';

    $view->display($template);
} else {
    header('Location: /');
    exit;
}