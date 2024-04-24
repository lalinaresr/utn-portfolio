<div class="row">
    <form action="<?= APP_URL; ?>/order.php" method="POST" id="products-form">
        <?php for ($i = 0; $i < $rows; $i++) : ?>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="price-mainheading"><?= $columns[$i]; ?></div>
                <?php for ($j = 0; $j < count($products[$i]); $j++) : ?>
                    <div class="price-heading">
                        <label>
                            <input type="checkbox" name="products[]" value='<?= serialize($products[$i][$j]); ?>' required>&nbsp;
                            <?= $products[$i][$j]['name']; ?>
                        </label>
                        <i class="price-item"><?= '$' . number_format($products[$i][$j]['price'], 2); ?></i>
                    </div>
                    <div class="description"><?= $products[$i][$j]['description']; ?></div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-block main-btn btn-products-form"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</button>
        </div>
    </form>
</div>