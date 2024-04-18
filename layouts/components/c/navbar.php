<?php
    function is_active($page)
    {
        return pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_FILENAME) === $page ? 'class="current"' : '';
    }
?>

<div class="head-nav">
    <span class="menu"></span>
    <ul>
        <li><a <?= is_active('index'); ?> href="<?= APP_URL; ?>">Inicio</a></li>
        <li><a <?= is_active('history'); ?> href="<?= APP_URL; ?>/history.php">Historia</a></li>
        <li><a <?= is_active('products'); ?> href="<?= APP_URL; ?>/products.php">Productos</a></li>
        <li><a <?= is_active('gallery'); ?> href="<?= APP_URL; ?>/gallery.php">Galería</a></li>
        <li><a <?= is_active('blog'); ?> href="<?= APP_URL; ?>/blog.php">Noticias</a></li>
        <li><a <?= is_active('contact'); ?> href="<?= APP_URL; ?>/contact.php">Contacto</a></li>
    </ul>
</div>

<div class="logo wow fadeIn">
    <a href="#">
        <img src="<?= LAYOUTS_PATH; ?>/images/c/site/logo.png" alt="<?= APP_NAME; ?>" title="<?= APP_NAME; ?>">
    </a>
</div>