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
<a href="/">На главную</a>
<a href="/Admin">Админка</a>
<form action="/UpdateArticle/?id=<?php echo $this->article->id; ?>" method="post">
    <input type="text" name="title" value="<?php echo $this->article->title; ?>">
    <br>
    <textarea rows="5" cols="50" name="content"><?php echo $this->article->content; ?></textarea>
    <br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>