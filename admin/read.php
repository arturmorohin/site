<?php
require_once "../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ввод</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form class="popular">
        <h3>Популярные товары</h3>

        <div class="tovar-list">
            <?php foreach ($products as $product): ?>
                <div class="tovar-card">
                    <div class="tovar-img">
                        <img src="<?php echo $product['img'] ?>">
                    </div>
                    <div class="tovar-info">
                        <p><?= $product['price'] ?> Руб.</p>
                        <p class="badge text-bg-primary text-wrap"><?= $product['name'] ?></p>
                        <a href="./product.php">Доброебнее</a><br>
                        <a href="./update.php?id=<?php echo $product['id'] ?>">Редактирование</a>
                        <a href="./delete.php?id=<?php echo $product['id'] ?>">Удали к негру</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </form>

</body>

</html>