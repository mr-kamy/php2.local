<?php

require __DIR__ . '/../autoload.php';

if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
    $article = \App\Models\Article::findById($_GET['id']);
} else {
    header('Location: /App/Controllers/admin.php');
    exit;
}
?>

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
<form action="/App/Controllers/updateArticle.php?id=<?php echo $article->id; ?>" method="post">
    <input type="text" name="title" value="<?php echo $article->title; ?>">
    <br>
    <textarea rows="5" cols="50" name="content"><?php echo $article->content; ?></textarea>
    <br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>