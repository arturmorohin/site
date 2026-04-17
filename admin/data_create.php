<?php
require_once "../config.php";
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$img = $_FILES["img"];

$newFileName = $img['name'];
move_uploaded_file($img['tmp_name'], "../img/$newFileName");

$conn -> query("INSERT INTO products (name, price, description, img) 
VALUES ('$name', '$price', '$description', '../img/$newFileName')");

header("Location: index.php");
exit;