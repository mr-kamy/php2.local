<?php

namespace App\Controllers;


use App\Controller;
use App\Exceptions\Exception404;

class FormArticle extends Controller
{

    protected function handle()
    {
        if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
            $id = $_GET['id'];
            if (\App\Models\Article::findById($id)) {
                $this->view->article = \App\Models\Article::findById($id);
                echo $this->view->render(__DIR__ . '/../../templates/updateArticle.php');
            } else {
                throw new Exception404('Новость не найдена', 404);
            }
        } else {
            echo $this->view->render(__DIR__ . '/../../templates/appendArticle.php');
        }
    }
}