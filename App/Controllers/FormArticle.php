<?php

namespace App\Controllers;


use App\Controller;

class FormArticle extends Controller
{

    protected function handle()
    {
        if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
            $id = $_GET['id'];

            $this->view->article = \App\Models\Article::findById($id);
            echo $this->view->render(__DIR__ . '/../../templates/updateArticle.php');
        } else {
            echo $this->view->render(__DIR__ . '/../../templates/appendArticle.php');
        }
    }
}