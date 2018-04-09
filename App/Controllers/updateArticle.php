<?php

require __DIR__ . '/../../autoload.php';

if ((!empty($_POST['title'])) && (!empty($_POST['content'])) && (!empty($_GET['id']))) {
    $article = \App\Models\Article::findById($_GET['id']);
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}

header('Location: /App/Controllers/admin.php');
exit;
