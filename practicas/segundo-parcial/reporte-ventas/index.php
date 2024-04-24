<?php
session_start();
require_once 'config.php';
require_once 'globals.php';

$_SESSION['sales'] = null;
if (isset($sales) && is_array($sales)) {
    $_SESSION['sales'] = $sales;
}

$styles = [
   RESOURCES_PATH . '/css/rv.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/rv/index.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
