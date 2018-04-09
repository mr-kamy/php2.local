<?php

namespace App\Controllers;

use App\Controller;

class Admin extends Controller
{
    protected function handle()
    {
        $this->view->news = \App\Models\Article::findAll();
        echo $this->view->render(__DIR__ . '/../../templates/admin.php');
    }

}