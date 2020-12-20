<?php

 $fname = $_POST['fname'];
 $price = $_POST['price'];
 $quantity = $_POST['quantity'];
 $calories = $_POST['calories'];  

$servername = "localhost";
$username = "root";
$passworddb = "";
$dbname = "restaurant";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passworddb);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO food(fname, price, quantity, calories)
    VALUES ('$fname', '$price', '$quantity', '$calories')";


    $conn->exec($sql);
    echo "<script> alert('Data Has Been Successfully Inserted')</script>";
    echo "<script> window.location.replace('register.html') </script>;";
    
  } catch(PDOException $e) {
    //echo $sql . "<br>" . $e->getMessage();
    echo $sql . "<br>" . $e->getMessage();
  }




  $conn = null;


 ?>