<?php
require_once 'config.php';

$styles = [
   RESOURCES_PATH . '/css/libs/sweetalert2.min.css',
   RESOURCES_PATH . '/css/ae.css'
];

$scripts = [
   RESOURCES_PATH . '/js/libs/jquery.form.min.js',
   RESOURCES_PATH . '/js/libs/sweetalert2.min.js',
   RESOURCES_PATH . '/js/ae.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/ae/header.php';
echo '<div class="container-fluid">';
include_once PARTIALS_PATH . '/ae/items.php';
echo '</div>';
include_once PARTIALS_PATH . '/ae/footer.php';
include_once PARTIALS_PATH . '/footer.php';
