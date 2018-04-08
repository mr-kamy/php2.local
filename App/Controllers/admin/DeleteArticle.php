<?php

namespace App\Controllers\admin;


use App\Controller;
use App\Models\Article;

class DeleteArticle extends Controller
{
    protected function handle()
    {
        if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
            $article = new Article();
            $article->id = $_GET['id'];
            $article->delete();
        }

        header('Location: /admin.php');
        exit;
    }

}