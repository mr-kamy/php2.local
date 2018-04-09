<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class AppendArticle extends Controller
{

    protected function handle()
    {
        if ((!empty($_POST['title'])) && (!empty($_POST['content']))) {
            $article = new Article();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
        }
        header('Location: /Admin');
        exit;
    }
}