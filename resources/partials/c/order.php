<div class="banner-inner">
    <div class="container">
        <?php include_once COMPONENTS_PATH . '/c/navbar.php'; ?>
        <section style="padding-top: 40px !important;" class="price-list wow fadeIn">
            <div class="row">
                <div class="contact">
                    <div class="col-md-12 contact-grid1">
                        <form action="<?= APP_URL; ?>/checkout.php" method="POST">
                            <input type="hidden" name="products-order" value="1">
                            <table class="table table-bordered table-condensed table-hover table-centered">
                                <thead>
                                    <tr class="warning">
                                        <th colspan="4">Complete su pedido</th>
                                    </tr>
                                    <tr class="warning">
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <?php include_once COMPONENTS_PATH . '/c/products-order.php'; ?>
                            </table>
                            <button type="submit" class="btn main-btn"><span class="glyphicon glyphicon-send"></span> Completar orden</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once COMPONENTS_PATH . '/c/footer.php'; ?>
</div>