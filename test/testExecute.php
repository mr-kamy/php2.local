<?php

require __DIR__ . '/../autoload.php';

$db = new \App\Db();

$sql = 'INSERT INTO news (title, content) VALUES (:title, :content)';
$data = [':title' => 'Новый заголовок', ':content' => 'Текст новой новости'];

$db->execute($sql, $data);