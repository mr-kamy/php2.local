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
<h2>Произошла ошибка: <?php echo $this->data['message']; ?></h2>
<h2>Код ошибки: <?php echo $this->data['code']; ?></h2>
</body>
</html>