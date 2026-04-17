<?php
require_once "../config.php";
$id = $_GET['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

if ($_FILES['img']['name'] != ""){
    $image = $_FILES['img'];
    $fileName = $image['name'];
    move_uploaded_file($image['tmp_name'], "../img/$fileName");
    $conn -> query("UPDATE products SET name='$name', price='$price', description='$description', img='../img/$fileName'
    WHERE id = $id");

}
else{
    $conn -> query("UPDATE products SET name='$name', price='$price', description='$description' WHERE id = $id");
}
 header("Location: read.php");
 exit;