<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class DeleteArticle extends Controller
{
    protected function handle()
    {
        if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
            $article = Article::findById($_GET['id']);
            $article->delete();
        }

        header('Location: /Admin');
        exit;
    }

}