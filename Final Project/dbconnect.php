<?php
$conn = mysqli_connect("localhost", "root", "", "foodies");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function add($data)
{
    global $conn;

    $foodname = $data["foodname"];
    $sellername = $data["sellername"];
    $price = $data["price"];
    $descriptions = $data["descriptions"];
    $whatsappno = $data["whatsappno"];


    $query = "INSERT INTO Food
              VALUES
              ('', '$foodname', '$sellername', '$price', '$descriptions', '$whatsappno')           
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM Food WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $id = $data["id"];
    $foodname = $data["foodname"];
    $sellername = $data["sellername"];
    $price = $data["price"];
    $descriptions = $data["descriptions"];
    $whatsappno = $data["whatsappno"];


    $query = "UPDATE Food SET
              foodname = '$foodname',
              sellername = '$sellername',
              price = '$price',
              descriptions = '$descriptions',
              whatsappno = '$whatsappno',
              WHERE id = $id         
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}