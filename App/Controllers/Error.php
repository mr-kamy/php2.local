<?php

namespace App\Controllers;


use App\Controller;

class Error extends Controller
{

    protected function handle()
    {
        $this->view->message = $this->message;
        $this->view->code = $this->code;
        echo $this->view->render(__DIR__ . '/../../templates/error.php');
    }
}