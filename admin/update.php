<?php
require_once "../config.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id = $id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ввод</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form action="./data_update.php?id=<?php echo $product['id']?>" method="POST" style="margin:30px" enctype="multipart/form-data">
        <div class="mb">
            <label for="exampleInputEmail1" class="label">Название товара</label>
            <input type="text" name="name" value="<?php echo $product['name']?>" class="form-control">
        </div>
        <div class="mb">
            <label for="exampleInputPassword1" class="label">Цена</label>
            <input type="number" name="price" value="<?php echo $product['price']?>" class="form-control">
        </div>
        <div class="mb">
            <label for="exampleInputPassword1" class="label">Описание</label>
            <textarea name="description" class="form-control"><?php echo $product['description']?></textarea>
        </div>
        <div class="mb">
            <label for="exampleInputPassword1" class="label">Картинка</label>
            <input type="file" name="img" value="<?php echo $product['img']?>" class="form-control" >
        </div>
        <button type="submit">Обновить товар</button>
    </form>
</body>

</html>