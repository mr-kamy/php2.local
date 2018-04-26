<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class AppendArticle extends Controller
{

    protected function handle()
    {

        if (!empty($_POST)) {
            $article = new Article();
            $article->fill($_POST);
            $article->save();
        }

        header('Location: /Admin');
        exit;
    }
}