<?php
require_once 'config.php';

$title = APP_NAME . ' | Resultados';

$styles = [
   LAYOUTS_PATH . '/css/tm.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/tm/response.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
