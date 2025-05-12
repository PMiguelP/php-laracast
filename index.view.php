<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Books recommended!</h1>
<ul>
    <?php foreach ($filteredBooksByAuthor as $book): ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releasedYear'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>

