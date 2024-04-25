<?php
require_once 'config.php';

$styles = [
   RESOURCES_URL . '/css/libs/sweetalert2.min.css'
];

$scripts = [
   RESOURCES_URL . '/js/libs/jquery.form.min.js',
   RESOURCES_URL . '/js/libs/sweetalert2.min.js',
   RESOURCES_URL . '/js/ae.js'
];

$body = 'class="pt-5 pb-4"';

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/ae/index.php';
include_once PARTIALS_PATH . '/footer.php';
