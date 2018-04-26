<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\Exception404;

class Article extends Controller
{
    protected function handle()
    {

        if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
            $id = $_GET['id'];

            if (\App\Models\Article::findById($id)) {
                $this->view->article = \App\Models\Article::findById($id);
            } else {
                throw new Exception404('Новость не найдена', 404);
            }
            echo $this->view->render(__DIR__ . '/../../templates/article.php');
        } else {
            header('Location: /');
            exit;
        }

    }
}