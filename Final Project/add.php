<?php
require 'dbconnect.php';


if (isset($_POST["submit"])) {

    
    if (add($_POST) > 0) {
        echo "
            <script>
                alert('Food Menu Successfuly Added!');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Food Menu Fail To Add!');
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
    <title>Add New Menu</title>

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
    <h1>Add A New Menu</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="foodname">Food Name : </label>
                <input type="text" name="foodname" id="foodname">
            </li>
            <li>
                <label for="sellername">Seller Name : </label>
                <input type="text" name="sellername" id="sellername">
            </li>
            <li>
                <label for="price">Price : </label>
                <input type="text" name="price" id="price">
            </li>
            <li>
                <label for="descriptions">Description : </label>
                <textarea name="descriptions" id="descriptions" cols="30" rows="10"></textarea>
            </li>
            <li>
                <label for="whatsappno">Whatsapp No : </label>
                <input type="text" name="whatsappno" id="whatsappno">
            </li>
            <li>
                <button type="submit" name="submit">Submit!</button>
            </li>
        </ul>
    </form>

</body>

</html>