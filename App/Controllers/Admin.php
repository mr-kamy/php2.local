<?php

namespace App\Controllers;

use App\AdminDataTable;
use App\Controller;

class Admin extends Controller
{
    protected function handle()
    {

        $articles = \App\Models\Article::findAll();

        $functions = include __DIR__ . '/../functions.php';
        $table = new AdminDataTable($articles, $functions);
        $table->render();

    }

}