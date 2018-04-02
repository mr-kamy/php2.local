<?php

require __DIR__ . '/../../autoload.php';

if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
    $article = new \App\Models\Article();
    $article->id = $_GET['id'];
    $article->delete();
}

header('Location: /App/Controllers/admin.php');
