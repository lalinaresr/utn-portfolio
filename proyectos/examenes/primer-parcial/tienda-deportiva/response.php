<?php
require_once 'config.php';

if (count($_POST) == 0) {
   header('Location: ' . APP_URL);
   exit;
}

$title = APP_NAME . ' | Verificar compra';

$styles = [
   RESOURCES_URL . '/css/td.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/td/response.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
