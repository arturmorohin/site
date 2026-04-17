<?php require_once "../config.php";

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";

$result = mysqli_query($conn, $sql);
 header("Location: read.php");
 exit;