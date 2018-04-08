<?php

namespace App\Controllers;

use App\Controller;

class Index extends Controller
{
    protected function handle()
    {
        $this->view->news = \App\Models\Article::findLast(3);
        echo $this->view->render(__DIR__ . '/../../templates/index.php');
    }

}