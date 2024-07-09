<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
</head>
<body>
    <form method="GET" action="">
        <input type="hidden" name="action" value="search">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author">
        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($books)): ?>
        <h2>Search Results</h2>
        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <a href="?action=detail&id=<?= $book['id'] ?>"><?= htmlspecialchars($book['title']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>