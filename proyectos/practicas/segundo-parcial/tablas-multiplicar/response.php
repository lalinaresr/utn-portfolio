<?php
require_once 'config.php';

if (count($_POST) == 0) {
   header('Location: ' . APP_URL);
   exit;
}

$title = APP_NAME . ' | Resultados';

$styles = [
   RESOURCES_URL . '/css/tm.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/tm/response.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
