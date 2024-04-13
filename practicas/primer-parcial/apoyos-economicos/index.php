<?php
require_once 'config.php';

$styles = [
   LAYOUTS_PATH . '/css/libs/sweetalert2.min.css',
   LAYOUTS_PATH . '/css/ae.css'
];

$scripts = [
   LAYOUTS_PATH . '/js/libs/jquery.form.min.js',
   LAYOUTS_PATH . '/js/libs/sweetalert2.min.js',
   LAYOUTS_PATH . '/js/ae.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/ae/header.php';
echo '<div class="container-fluid">';
include_once PARTIALS_PATH . '/ae/items.php';
echo '</div>';
include_once PARTIALS_PATH . '/ae/footer.php';
include_once PARTIALS_PATH . '/footer.php';
