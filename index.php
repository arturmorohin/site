<?php
include "header.php";
require_once "config.php"
    ?>
<section class="popular">
    <h3>Популярные товары</h3>

    <div class="tovar-list">
        <?php foreach ($products as $product): ?>
            <div class="tovar-card">
                <div class="tovar-img">
                    <img src="<?php echo $product['link'] ?>" width=300px>
                </div>
                <div class="tovar-info">
                    <p><?= $product['price'] ?> Руб.</p>
                    <p class="badge text-bg-primary text-wrap" style="width: 6rem;"><?= $product['name'] ?></p>
                    <a href="./product.php">Доброебнее</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
            </section>
<?php
include "footer.php";
?>
