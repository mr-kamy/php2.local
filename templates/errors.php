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
<a href="/">Главная</a>
<h2>Ошибка: <?php foreach ($this->data['messages'] as $message): ?></h2>
<h3><?php echo $message; ?></h3>
<?php endforeach; ?>
</body>
</html>