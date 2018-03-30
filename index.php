<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findAll();

$user = \App\Models\User::findById(1);

var_dump($user);