<?php

namespace App\Controllers\admin;


use App\Controller;
use App\Models\Article;

class UpdateArticle extends Controller
{
    protected function handle()
    {
        if ((!empty($_POST['title'])) && (!empty($_POST['content'])) && (!empty($_GET['id']))) {
            $article = new Article();
            $article->id = $_GET['id'];
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
        }
        header('Location: /admin.php');
        exit;
    }
}