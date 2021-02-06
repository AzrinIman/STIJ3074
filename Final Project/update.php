<?php
require 'dbconnect.php';

$id = $_GET["id"];


$food = query("SELECT * FROM food WHERE id = $id")[0];


if (isset($_POST["submit"])) {



    if (update($_POST) > 0) {
        echo "
            <script>
                alert('Update Has Been Successful!');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Fail To Update!');
                document.location.href = 'index.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Food Menu</title>

    <style>
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: none;
        }
    </style>

</head>

<body>
    <h1>Update Food Menu</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $food["id"]; ?>">
        <ul>
            <li>
                <label for="foodname">Food Name : </label>
                <input type="text" name="foodname" id="foodname" value="<?= $food["foodname"]; ?>">
            </li>
            <li>
                <label for="sellername">Seller Name : </label>
                <input type="text" name="sellername" id="sellername" value="<?= $food["sellername"]; ?>">
            </li>
            <li>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price" value="<?= $food["price"]; ?>">
            </li>
            <li>
                <label for="descriptions">Description : </label>
                <!-- <input type="text" name="descriptions" id="descriptions" cols="30" rows="10" value="<?= $food["descriptions"]; ?>"> -->
                <textarea name="descriptions" id="descriptions" cols="30" rows="10"><?= $food["descriptions"]; ?></textarea>
            </li>
            <li>
                <label for="whatsappno">Whatsapp No : </label>
                <input type="text" name="whatsappno" id="whatsappno" value="<?= $food["whatsappno"]; ?>">
            </li>
            <li>
                <button type=" submit" name="submit">Submit!</button>
            </li>
        </ul>
        <a href="index.php">Cancel</a>
    </form>

</body>

</html>