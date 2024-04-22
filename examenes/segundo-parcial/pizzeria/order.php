<?php
require_once 'connection.php';

$title = APP_NAME . ' | Respuesta';

$styles = [
	RESOURCES_PATH . '/css/p.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/pi/response.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
