<?php

require __DIR__ . '/autoload.php';

if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
    $id = $_GET['id'];
    $article = \App\Models\Article::findById($id);

    include __DIR__ . '/templates/article.php';
} else {
    header('Location: /');
    exit;
}