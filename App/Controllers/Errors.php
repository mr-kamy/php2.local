<?php

namespace App\Controllers;


use App\Controller;

class Errors extends Controller
{

    protected function handle()
    {
        $this->view->messages = $this->messages;
        echo $this->view->render(__DIR__ . '/../../templates/errors.php');
    }
}