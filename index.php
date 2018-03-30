<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findAll();

$users = \App\Models\User::findAll();

var_dump($users);