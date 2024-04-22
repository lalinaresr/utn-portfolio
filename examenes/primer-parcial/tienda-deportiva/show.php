<?php
require_once 'config.php';

$title = APP_NAME . ' | Verificar compra';

$styles = [
   RESOURCES_PATH . '/css/td.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/td/response.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
