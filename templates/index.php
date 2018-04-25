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

<a href="/Admin">Админ-панель</a>

<?php foreach ($this->news as $article): ?>
    <article>
        <a href="/Article/?id=<?php echo $article->id; ?>"><h2><?php echo $article->title; ?></h2>
        </a>
        <p><?php echo mb_substr($article->content, 0, 300) . '...'; ?></p>
        <?php if (isset($article->author)): ?>
            <p><cite><?php echo $article->author->name; ?></cite></p>
        <?php endif; ?>
    </article>
<?php endforeach; ?>

</body>
</html>