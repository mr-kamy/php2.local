<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>AdminTable</h1>
<a href="/">На главную</a>
<table border="1">
    <?php foreach ($this->data['models'] as $article): ?>
        <tr>
            <?php foreach ($this->data['functions'] as $function): ?>
                <td><?php echo($function($article)); ?></td>
            <?php endforeach; ?>
            <td><a href="/FormArticle/?id=<?php echo $article->id; ?>">Редактировать запись</a></td>
            <td><a href="/DeleteArticle/?id=<?php echo $article->id; ?>">Удалить запись</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="/FormArticle">Добавить запись</a>
</body>
</html>