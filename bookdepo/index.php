<?php
require 'dbconnect.php';
$book = query("SELECT * FROM book");


if (isset($_POST["find"])) {
    $books = find($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Book Depository</h1>

    <br>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Description</th>
            <th>Publisher</th>
            <th>ISBN</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($book as $book) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="update.php?id=<?= $book["id"]; ?>">Update</a> |
                    <a href="delete.php?id=<?= $book["id"]; ?>" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
                </td>
                <td><?= $book["title"]; ?></td>
                <td><?= $book["author"]; ?></td>
                <td><?= $book["price"]; ?></td>
                <td><?= $book["descriptions"]; ?></td>
                <td><?= $book["publisher"]; ?></td>
                <td><?= $book["isbn"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <br><br>
    <a class="add" href="add.php">Add A New Book</a>


</body>

</html>