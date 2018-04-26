<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class UpdateArticle extends Controller
{
    protected function handle()
    {

        if (!empty($_POST)) {
            $article = Article::findById($_GET['id']);
            $article->fill($_POST);
            $article->save();
        }

        header('Location: /Admin');
        exit;
    }
}