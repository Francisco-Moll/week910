<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
</head>
<body>
    <?php if (isset($book)): ?>
        <h2><?= htmlspecialchars($book['title']) ?></h2>
        <p><strong>Author:</strong> <?= htmlspecialchars($book['author']) ?></p>
        <p><strong>Genre:</strong> <?= htmlspecialchars($book['genre']) ?></p>
        <p><strong>Publication Year:</strong> <?= htmlspecialchars($book['publication_year']) ?></p>
        <a href="?">Back to search</a>
    <?php endif; ?>
</body>
</html>