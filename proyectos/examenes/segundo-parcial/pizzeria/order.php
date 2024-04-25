<?php
require_once 'connection.php';

if (count($_POST) == 0) {
	header('Location: ' . APP_URL);
	exit;
 }

$title = APP_NAME . ' | Respuesta';

$styles = [
	RESOURCES_URL . '/css/pi.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/pi/response.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
