<?php
session_start();
require_once 'config.php';
require_once 'data.php';

if (!isset($_POST['products']) || count($_POST['products']) == 0) {
   header('Location: ' . APP_URL . '/products.php');
   exit;
}

$title = APP_NAME . ' | Completar pedido';

$styles = [
   LAYOUTS_PATH . '/css/libs/animate.css',
   'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700',
   'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300',
   LAYOUTS_PATH . '/css/c.css'
];

$scripts = [
   LAYOUTS_PATH . '/js/libs/wow.js',
   LAYOUTS_PATH . '/js/c.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/c/order.php';
include_once PARTIALS_PATH . '/footer.php';