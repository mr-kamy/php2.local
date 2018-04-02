<?php

require __DIR__ . '/../../autoload.php';

if ((!empty($_POST['title'])) && (!empty($_POST['content'])) && (!empty($_GET['id']))) {
    $article = new \App\Models\Article();
    $article->id = $_GET['id'];
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}

header('Location: /App/Controllers/admin.php');
exit;
