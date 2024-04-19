<div class="banner-inner">
    <div class="container">
        <?php include_once COMPONENTS_PATH . '/c/navbar.php'; ?>
        <section style="padding-top: 40px !important;" class="price-list wow fadeIn">
            <div class="row">
                <div class="contact">
                    <div class="col-md-12 contact-grid1">
                        <table class="table table-responsive table-bordered table-hover table-condensed" id="center-table">                            
                            <?php include_once COMPONENTS_PATH . '/c/products-checkout.php'; ?>
                        </table>
                        <a href="<?= APP_URL; ?>/PDF.php" class="btn main-btn" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i> Imprimir ticket</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once COMPONENTS_PATH . '/c/footer.php'; ?>
</div>