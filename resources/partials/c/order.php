<div class="banner-inner">
    <div class="container">
        <?php include_once COMPONENTS_PATH . '/c/navbar.php'; ?>
        <section style="padding-top: 40px !important;" class="price-list wow fadeIn">
            <div class="row">
                <div class="contact">
                    <div class="col-md-12 contact-grid1">
                        <form action="<?= APP_URL; ?>/checkout.php" method="POST">
                            <input type="hidden" name="products-order" value="1">
                            <table class="table table-bordered table-hover table-condensed table-centered">                                
                                <?php include_once COMPONENTS_PATH . '/c/products-order.php'; ?>
                            </table>
                            <button type="submit" class="btn main-btn"><span class="glyphicon glyphicon-send"></span> Ordenar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once COMPONENTS_PATH . '/c/footer.php'; ?>
</div>