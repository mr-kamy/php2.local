<?php

require __DIR__ . '/../App/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$ctrl = $parts[1] ? ucfirst($parts[1]) : 'Index';
$class = '\App\Controllers\\' . $ctrl;

try {
    $ctrl = new $class;
    $ctrl();
} catch (\App\Exceptions\DbException $error) {
    $ctrl = new \App\Controllers\Error;
    $ctrl->message = $error->getMessage();
    $ctrl->code = $error->getCode();
    $ctrl();
} catch (\App\Exceptions\Exception404 $error) {
    $ctrl = new \App\Controllers\Error404;
    $ctrl();
}
