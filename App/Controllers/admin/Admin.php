<?php

namespace App\Controllers\admin;

use App\Controller;

class Admin extends Controller
{
    protected function handle()
    {
        $this->view->news = \App\Models\Article::findLast(3);
        echo $this->view->render(__DIR__ . '/../../../templates/admin.php');
    }

}