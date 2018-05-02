<?php

require __DIR__ . '/../App/autoload.php';


$articles = \App\Models\Article::findAll();

$functions = [
    function ($article) {
        return $article->id;
    },
    function ($article) {
        return $article->title;
    },
    function ($article) {
        return $article->content;
    },
    function ($article) {
        if (isset($article->author)) {
            return $article->author->name;
        } else {
            return '';
        }
    },
];

$table = new \App\AdminDataTable($articles, $functions);
$table->render();
/*

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$ctrl = $parts[1] ? ucfirst($parts[1]) : 'Index';
$class = '\App\Controllers\\' . $ctrl;

try {
    $ctrl = new $class;
    $ctrl();
} catch (\App\Exceptions\DbException $error) {
    $logger = new \App\Logger();
    $logger->append($error);
    $logger->save();
    $ctrl = new \App\Controllers\Error;
    $ctrl->message = $error->getMessage();
    $ctrl->code = $error->getCode();
    $ctrl();
} catch (\App\Exceptions\Exception404 $error) {
    $logger = new \App\Logger();
    $logger->append($error);
    $logger->save();
    $ctrl = new \App\Controllers\Error404;
    $ctrl();
} catch (Kamc\MultiException\MultiException $errors) {
    $ctrl = new \App\Controllers\Errors;
    $messages = [];
    foreach ($errors->all() as $error) {
        $logger = new \App\Logger();
        $logger->append($error);
        $logger->save();
        $messages[] = $error->getMessage();
    }
    $ctrl->messages = $messages;
    $ctrl();

}
*/