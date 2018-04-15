<?php

namespace App\Controllers;


use App\Controller;

class Error404 extends Controller
{

    protected function handle()
    {
        echo $this->view->render(__DIR__ . '/../../templates/error404.php');
    }
}