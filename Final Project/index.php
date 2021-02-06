<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require 'dbconnect.php';
$food = query("SELECT * FROM food");


if (isset($_POST["find"])) {
    $foods = find($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You Have Successfully Logged In .</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Welcome To Foodies</h1>

    <br>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Food Name</th>
            <th>Seller Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Whatsapp No</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($food as $food) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="update.php?id=<?= $food["id"]; ?>">Update</a> |
                    <a href="delete.php?id=<?= $food["id"]; ?>" onclick="return confirm('Are you sure you want to delete this Menu?');">Delete</a>
                </td>
                <td><?= $food["foodname"]; ?></td>
                <td><?= $food["sellername"]; ?></td>
                <td><?= $food["price"]; ?></td>
                <td><?= $food["descriptions"]; ?></td>
                <td><?= $food["whatsappno"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <br><br>
    <a class="add" href="add.php">Add A New Food Menus</a>


</body>

</html>