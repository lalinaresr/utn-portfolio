<?php
session_start();
require_once 'config.php';
require_once 'globals.php';

$_SESSION['amounts'] = null;
if (isset($_SESSION['products']) and isset($_POST['products-order'])) {
   $_SESSION['amounts'] = $_POST;
} else {
   header('Location: ' . APP_URL . '/products.php');
   exit;   
}

$title = APP_NAME . ' | Verificar compra';

$styles = [
   RESOURCES_URL . '/css/libs/animate.css',
   'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700',
   'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300',
   RESOURCES_URL . '/css/c.css'
];

$scripts = [
   RESOURCES_URL . '/js/libs/wow.js',
   RESOURCES_URL . '/js/c.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/c/checkout.php';
include_once PARTIALS_PATH . '/footer.php';
