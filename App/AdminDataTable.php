<?php

namespace App;


class AdminDataTable
{
    protected $models;
    protected $functions;

    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function render()
    {
        $template = __DIR__ . '/../templates/admin.php';
        $view = new View();
        $view->models = $this->models;
        $view->functions = $this->functions;
        echo $view->render($template);
    }

}